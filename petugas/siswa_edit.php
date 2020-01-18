<ol class="breadcrumb">
	<li class="breadcrumb-item">Siswa</li>
	<li class="breadcrumb-item active">Edit Siswa</li>
</ol>
<?php 
	$id_siswa = $_GET['id_siswa'];
	if (empty($id_siswa)) {
		echo "<script>location='index.php?p=siswa'</script>";
	}else{
		$line = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa='$id_siswa' ");
		$cek = mysqli_num_rows($line);
		if ($cek > 0) {
			$data = mysqli_fetch_array($line);
		}else{
			echo "<script>location='index.php?p=siswa'</script>";
		}
	}
 ?>

 <form action="" method="POST">
 	<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label for="nama_siswa">Nama Siswa</label>
 				<input type="text" name="nama_siswa" id="nama_siswa" class="form-control" required="" value="<?php echo $data['nama_siswa'] ?>">
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
 				<label for="nama_jurusan">Nama Jurusan</label>
 				<select name="nama_jurusan" id="nama_jurusan" required="" class="form-control">
 					<option value="" disabled="">Pilih Jurusan</option>
 					<option value="Teknik Komputer Jaringan" <?php if($data['nama_jurusan'] == "Teknik Komputer Jaringan"){ echo "selected";} ?>>Teknik Komputer Jaringan</option>
 					<option value="Multi Media" <?php if($data['nama_jurusan'] == "Multi Media"){ echo "selected";} ?>>Multi Media</option>
					<option value="Rekayasa Perangkat Lunak" <?php if($data['nama_jurusan'] == "Rekayasa Perangkat Lunak"){ echo "selected";} ?>>Rekayasa Perangkat Lunak</option>
 				</select>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<div class="form-group">
 				<label for="nama_kelas">Nama Kelas</label>
 				<select name="nama_kelas" id="nama_kelas" required="" class="form-control">
 					<option value="" disabled="">Pilih Kelas</option>
 					<?php 
 						$kelas = mysqli_query($koneksi, "SELECT * FROM kelas");
 						while ($data_kelas = mysqli_fetch_array($kelas)) {
 							?>
 							<option value="<?php echo $data_kelas['id_kelas'] ?>" <?php if($data['id_kelas'] == $data_kelas['id_kelas']){ echo "selected";} ?>><?php echo $data_kelas['nama_kelas'] ?></option>
 							<?php
 						}
 					 ?>
 				</select>
 			</div>
 			<div class="form-group">
 				<label for="nama_jadwal">Nama Jadwal</label>
 				<select name="nama_jadwal" id="nama_jadwal" class="form-control" required="">
 					<option value="" disabled="">Pilih Jadwal</option>
 					<option value="Monday" <?php if($data['nama_jadwal'] == "Monday"){ echo "selected";} ?>>Senin</option>
					<option value="Tuesday" <?php if($data['nama_jadwal'] == "Tuesday"){ echo "selected";} ?>>Selasa</option>
					<option value="Wednesday" <?php if($data['nama_jadwal'] == "Wednesday"){ echo "selected";} ?>>Rabu</option>
					<option value="Thursday" <?php if($data['nama_jadwal'] == "Thursday"){ echo "selected";} ?>>Kamis</option>
					<option value="Friday" <?php if($data['nama_jadwal'] == "Friday"){ echo "selected";} ?>>Jum'at</option>
					<option value="Saturday" <?php if($data['nama_jadwal'] == "Saturday"){ echo "selected";} ?>>Sabtu</option>
 				</select>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<button name="edit" class="btn btn-primary">Edit</button>
 			<a href="index.php?p=siswa" title="Kembali" class="btn btn-danger">Kembali</a>
 		</div>
 	</div>
 </form>
 <?php 
 	if (isset($_POST['edit'])) {
 		$nama_siswa = $_POST['nama_siswa'];
 		$jenis_kelamin = $_POST['jenis_kelamin'];
 		$nama_jurusan = $_POST['nama_jurusan'];
 		$nama_kelas = $_POST['nama_kelas'];
 		$nama_jadwal = $_POST['nama_jadwal'];

 		$query = mysqli_query($koneksi, "UPDATE siswa SET nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', nama_jurusan='$nama_jurusan', id_kelas='$nama_kelas', nama_jadwal='$nama_jadwal' WHERE id_siswa='$id_siswa' ");
 		if ($query) {
 			echo "<script>alert('Siswa berhasil di edit!')</script>";
 			echo "<script>location='index.php?p=siswa'</script>";
 		}else{
 			echo "<script>alert('Siswa gagal di edit!')</script>";
 		}
 	}
  ?>