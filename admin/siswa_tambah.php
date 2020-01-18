<ol class="breadcrumb">
	<li class="breadcrumb-item">Siswa</li>
	<li class="breadcrumb-item active">Tambah Siswa</li>
</ol>
<?php 
	$select = mysqli_query($koneksi, "SELECT max(id_siswa) AS max_kode FROM siswa ");
	$data = mysqli_fetch_array($select);
	$line = $data['max_kode'];
	$banyak = (int) substr($line, 2, 4);
	$banyak++;
	$char = "ST";
	$kode_siswa = $char . sprintf("%04s", $banyak);
 ?>
<form action="" method="POST">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="nama_siswa">Nama Siswa</label>
				<input type="text" name="nama_siswa" id="nama_siswa" class="form-control" required="" placeholder="Masukkan nama siswa">
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label><br>
				<input type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" required=""><label for="laki-laki">&nbsp;Laki - laki</label>&nbsp;
				<input type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" required=""><label for="perempuan">&nbsp;Perempuan</label>
			</div>
			<div class="form-group">
				<label for="nama_jurusan">Nama Jurusan</label>
				<select name="nama_jurusan" id="nama_jurusan" class="form-control" required="">
					<option value="" selected="" disabled="">Pilih Jurusan</option>
					<option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
					<option value="Multi Media">Multi Media</option>
					<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="nama_kelas">Nama Kelas</label>
				<select name="nama_kelas" id="nama_kelas" required="" class="form-control">
					<option value="" selected="" disabled="">Pilih Kelas</option>
					<?php
						$query = mysqli_query($koneksi, "SELECT * FROM kelas ");
						$cek = mysqli_num_rows($query);
						if ($cek > 0) {
							while ($data = mysqli_fetch_array($query)) {
								?>
								<option value="<?php echo $data['id_kelas'] ?>"><?php echo $data['nama_kelas'] ?></option>
								<?php
							}
						}else{
							?>
							<option value="" disabled="">Kelas tidak ada, mohon tambahkan data kelas!</option>
							<?php
						}
					 ?>
				</select>
			</div>
			<div class="form-group">
				<label for="nama_jadwal">Nama Jadwal</label>
				<select name="nama_jadwal" id="nama_jadwal" required="" class="form-control">
					<option value="" selected="" disabled="">Pilih Jadwal</option>
					<option value="Monday">Senin</option>
					<option value="Tuesday">Selasa</option>
					<option value="Wednesday">Rabu</option>
					<option value="Thursday">Kamis</option>
					<option value="Friday">Jum'at</option>
					<option value="Saturday">Sabtu</option>
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" name="tambah">Tambah</button>
				<a href="index.php?p=siswa" class="btn btn-danger">Kembali</a>
			</div>
		</div>
	</div>
</form>
<?php 
	if (isset($_POST['tambah'])) {
		$nama_siswa = $_POST['nama_siswa'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$nama_jurusan = $_POST['nama_jurusan'];
		$nama_kelas = $_POST['nama_kelas'];
		$nama_jadwal = $_POST['nama_jadwal'];

		$insert = mysqli_query($koneksi, "INSERT INTO siswa SET id_siswa='$kode_siswa', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', nama_jurusan='$nama_jurusan', id_kelas='$nama_kelas', nama_jadwal='$nama_jadwal' ");
		if ($insert) {
			echo "<script>alert('Data siswa berhasil ditambah!')</script>";
			echo "<script>location='index.php?p=siswa'</script>";
		}else{
			echo "<script>alert('Data siswa gagal ditambah!')</script>";
		}
	}
 ?>