<?php 
  include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="login.png">
    <title>Daftar Piket</title>
    <link rel="stylesheet" href="style.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="container">
    	<section id="content">
    		<form action="" method="POST">
    			<h1><i class="fa fa-address-book"></i> Login Petugas</h1>
              <strong style="color: red;">Warning!</strong> Harap Masukkan username dan password dengan benar!!
              <br><br>
    			<div>
    				<input type="text" placeholder="Username" required="" id="username" name="username" />
    			</div>
    			<div>
    				<input type="password" placeholder="Password" required="" id="password" name="password" />
    			</div>
          <div>
      			<input type="submit" name="login" value="Login">
            <a href="#">Forget the password?</a>
            <a href="#">Register</a>
          </div>
    		</form>
        <?php 
          if (isset($_POST['login'])) {
            $username = mysqli_real_escape_string($koneksi,htmlentities($_POST['username']));
            $password = mysqli_real_escape_string($koneksi,htmlentities(md5($_POST['password'])));

            $query = mysqli_query($koneksi, "SELECT * FROM petugas INNER JOIN level ON petugas.id_level=level.id_level WHERE username='$username' AND password='$password' ");
            $cek = mysqli_num_rows($query);
            $data = mysqli_fetch_assoc($query);
            if ($cek > 0) {
              if ($data['nama_level'] == "admin") {
                session_start();
                $_SESSION['data']=$data;
                $_SESSION['username']=$username;
                echo "<script>alert('Anda login sebagai Admin')</script>";
                echo "<script>location='admin/index.php'</script>";
              }elseif ($data['nama_level'] == "petugas") {
                session_start();
                $_SESSION['data']=$data;
                $_SESSION['username']=$username;
                echo "<script>alert('Anda login sebagai petugas')</script>";
                echo "<script>location='petugas/index.php'</script>";
              }else{
                echo "<script>alert('Session Level Gagal!')</script>";
              }
            }else{
              echo "<script>alert('Username atau password salah!')</script>";
            }
          }
         ?>
  </body>
</html>
