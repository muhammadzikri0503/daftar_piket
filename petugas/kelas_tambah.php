<ol class="breadcrumb">
	<li class="breadcrumb-item">Kelas</li>
	<li class="breadcrumb-item active">Tambah Kelas</li>
</ol>

<form action="" method="POST">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="kelas">Kelas</label>
				<select name="kelas" id="kelas" class="form-control" required="">
					<option value="" selected="" disabled="">Pilih Kelas</option>
					<option value="X">X (Sepuluh)</option>
					<option value="XI">XI (Sebelas)</option>
					<option value="XII">XII (Dua belas)</option>
				</select>
			</div>
			<div class="form-group">
				<label for="nama_kelas">Nama Kelas</label>
				<input type="text" name="nama_kelas" id="nama_kelas" class="form-control" required="" placeholder="Masukkan nama kelas">
			</div>
			<div class="form-group">
				<button name="tambah" class="btn btn-primary">Tambah</button>
				<a href="index.php?p=kelas" class="btn btn-danger">Kembali</a>
			</div>
		</div>
	</div>
</form>
<?php 
	if (isset($_POST['tambah'])) {
		$nama_kelas = $_POST['nama_kelas'];
		$kelas = $_POST['kelas'];

		$lihat = mysqli_query($koneksi, "SELECT * FROM kelas WHERE nama_kelas='$kelas' ");
		$cek = mysqli_num_rows($lihat);
		if ($cek > 0) {
			echo "<script>alert('Kelas telah ada!, masukkan nama kelas lain!')</script>";
		}else{
			$query = mysqli_query($koneksi, "INSERT INTO kelas SET nama_kelas='$nama_kelas', kelas='$kelas' ");
			if ($query) {
				echo "<script>alert('Kelas berhasil ditambah!')</script>";
				echo "<script>location='index.php?p=kelas'</script>";
			}else{
				echo "<script>alert('Kelas gagal ditambah!')</script>";
			}
		}
	}
 ?>