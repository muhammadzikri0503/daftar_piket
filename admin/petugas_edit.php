<ol class="breadcrumb">
	<li class="breadcrumb-item">Petugas</li>
	<li class="breadcrumb-item active">Edit Petugas</li>
</ol>
<?php 
	$id_petugas = $_GET['id_petugas'];
	if (empty($id_petugas)) {
		echo "<script>location='index.php?p=petugas'</script>";
	}else{
		if ($id_petugas == "1") {
			echo "<script>location='index.php?p=petugas'</script>";
		}else{
			$ambil = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$id_petugas' ");
			$cek = mysqli_num_rows($ambil);
			if ($cek > 0) {
				$data = mysqli_fetch_array($ambil);
			}else{
				echo "<script>location='index.php?p=petugas'</script>";
			}
		}
	}
 ?>
 <form action="" method="POST">
 	<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label for="nama_petugas">Nama Petugas</label>
 				<input type="text" name="nama_petugas" id="nama_petugas" class="form-control" required="" value="<?php echo $data['nama_petugas'] ?>">
 			</div>
 			<div class="form-group">
 				<label for="jenis_kelamin">Jenis Kelamin</label>
 				<select name="jenis_kelamin" id="jenis_kelamin" required="" class="form-control">
 					<option value="" disabled="">Pilih Jenis Kelamin</option>
 					<option value="laki-laki" <?php if($data['jenis_kelamin'] == "laki-laki"){ echo "selected";} ?>>Laki - laki</option>
 					<option value="perempuan" <?php if($data['jenis_kelamin'] == "perempuan"){ echo "selected";} ?>>Perempuan</option>
 				</select>
 			</div>
 			<div class="form-group">
 				<label for="username">Username <i>(Optional)</i></label>
 				<input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username baru!">
 			</div>
 			<div class="form-group">
 				<label for="password">Password</label>
 				<input type="password" name="password" id="password" class="form-control" value="<?php echo $data['password'] ?>">
 			</div>
 			<div class="form-group">
 				<button name="edit" class="btn btn-primary">Edit</button>
 				<a href="index.php?p=petugas" class="btn btn-danger">Kembali</a>
 			</div>
 		</div>
 	</div>
 </form>
 <?php 
 	if (isset($_POST['edit'])) {
 		$nama_petugas = $_POST['nama_petugas'];
	 	$jenis_kelamin = $_POST['jenis_kelamin'];
	 	$username = $_POST['username'];
	 	$password = md5($_POST['password']);

	 	if (empty($_POST['username'])) {
	 		$query = mysqli_query($koneksi, "UPDATE petugas SET nama_petugas='$nama_petugas', jenis_kelamin='$jenis_kelamin', password='$password' WHERE id_petugas='$id_petugas' ");
	 		if ($query) {
	 			echo "<script>alert('Petugas berhasil di edit!')</script>";
	 			echo "<script>location='index.php?p=petugas'</script>";
	 		}else{
	 			echo "<script>alert('Petugas gagal di edit!')</script>";
	 		}
	 	}else{
	 		$query = mysqli_query($koneksi, "UPDATE petugas SET nama_petugas='$nama_petugas', jenis_kelamin='$jenis_kelamin', username='$username', password='$password' WHERE id_petugas='$id_petugas' ");
	 		if ($query) {
	 			echo "<script>alert('Petugas berhasil di edit!')</script>";
	 			echo "<script>location='index.php?p=petugas'</script>";
	 		}else{
	 			echo "<script>alert('Petugas gagal di edit!')</script>";
	 		}
	 	}
 	}
  ?>