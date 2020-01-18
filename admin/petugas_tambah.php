<ol class="breadcrumb">
	<li class="breadcrumb-item">Petugas</li>
	<li class="breadcrumb-item active">Tambah Petugas</li>
</ol>

<form action="" method="POST">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="nama_petugas">Nama Petugas</label>
				<input type="text" name="nama_petugas" id="nama_petugas" class="form-control" required="" placeholder="Masukkan nama petugas">
			</div>
			<div class="form-group">
				<label for="jenis_kelamin">Jenis Kelamin</label><br>
				<input type="radio"  name="jenis_kelamin" value="laki-laki" required="" id="laki-laki"><label for="laki-laki">&nbsp;Laki - laki</label>&nbsp;
				<input type="radio"  name="jenis_kelamin" value="perempuan" required="" id="perempuan"><label for="perempuan">&nbsp;Perempuan</label>
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="username" name="username" id="username" required="" class="form-control" placeholder="Masukkan username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" required="" class="form-control" placeholder="Masukkan password">
			</div>
			<div class="form-group">
				<button name="tambah" class="btn btn-primary">Tambah</button>
				<a href="index.php?p=petugas" class="btn btn-danger">Kembali</a>
			</div>
		</div>
	</div>
</form>
<?php 
	if (isset($_POST['tambah'])) {
		$nama_petugas = $_POST['nama_petugas'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$id_level = "2";

		$lihat = mysqli_query($koneksi, "SELECT * FROM petugas WHERE nama_petugas='$nama_petugas' ");
		$cek = mysqli_num_rows($lihat);

		if ($cek > 0) {
			?>
			<br>
			<div class="alert alert-warning">Username telah dipakai!</div>
			<?php
		}else{
			$query = mysqli_query($koneksi, "INSERT INTO petugas SET nama_petugas='$nama_petugas', jenis_kelamin='$jenis_kelamin', username='$username', password='$password', id_level='$id_level' ");
			if ($query) {
				echo "<script>alert('Data petugas berhasil ditambahkan!')</script>";
				echo "<script>location='index.php?p=petugas'</script>";
			}else{
				echo "<script>alert('Data petugas gagal ditambahkan!')</script>";
			}
		}
	}
 ?>