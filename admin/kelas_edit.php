<ol class="breadcrumb">
	<li class="breadcrumb-item">Kelas</li>
	<li class="breadcrumb-item active">Edit Kelas</li>
</ol>
<?php 
	$id_kelas = $_GET['id_kelas'];
	if (empty($id_kelas)) {
		echo "<script>location='index.php?p=kelas'</script>";
	}else{
		$lihat = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas='$id_kelas' ");
		$cek = mysqli_num_rows($lihat);
		if ($cek > 0) {
			$data = mysqli_fetch_array($lihat);
		}else{
			echo "<script>location='index.php?p=kelas'</script>";
		}
	}
 ?>
<form action="" method="POST">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="kelas">Kelas</label>
				<select name="kelas" id="kelas" class="form-control" required="">
					<option value="" disabled="">Pilih Kelas</option>
					<option value="X" <?php if($data['kelas'] == "X"){ echo "selected";} ?>>X (Sepuluh)</option>
					<option value="XI" <?php if($data['kelas'] == "XI"){ echo "selected";} ?>>XI (Sebelas)</option>
					<option value="XII" <?php if($data['kelas'] == "XII"){ echo "selected";} ?>>XII (Dua belas)</option>
				</select>
			</div>
			<div class="form-group">
				<label for="nama_kelas">Nama Kelas</label>
				<input type="text" name="nama_kelas" id="nama_kelas" class="form-control" placeholder="Masukkan nama kelas baru!" required="">
			</div>
			<div class="form-group">
				<button name="ubah" class="btn btn-primary">Ubah</button>
				<a href="index.php?p=kelas" class="btn btn-danger">Batal</a>
			</div>
		</div>
	</div>
</form>
<?php 
	if (isset($_POST['ubah'])) {
		$nama_kelas = $_POST['nama_kelas'];
		$kelas = $_POST['kelas'];

		$qc = mysqli_query($koneksi, "SELECT * FROM kelas WHERE nama_kelas='$nama_kelas' ");
		$cek2 = mysqli_num_rows($qc);
		if ($cek2 > 0) {
			echo "<script>alert('Kelas telah ada!, Masukkan nama kelas berbeda!')</script>";
		}else{
			$update = mysqli_query($koneksi, "UPDATE kelas SET nama_kelas='$nama_kelas', kelas='$kelas' WHERE id_kelas='$id_kelas' ");
			if ($update) {
				echo "<script>alert('Kelas berhasil di ubah!')</script>";
				echo "<script>location='index.php?p=kelas'</script>";
			}else{
				echo "<script>alert('Kelas gagal di ubah!')</script>";
			}
		}
	}
 ?>