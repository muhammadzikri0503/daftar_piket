<ol class="breadcrumb">
	<li class="breadcrumb-item">Daftar Piket</li>
	<li class="breadcrumb-item active">Hari</li>
</ol>
<?php 
	$nama_kelas = $_GET['nama_kelas'];
	if (empty($nama_kelas)) {
		echo "<script>location='index.php?p=piket'</script>";
	}else{
		$lihat = mysqli_query($koneksi, "SELECT * FROM kelas WHERE nama_kelas='$nama_kelas' ");
		$lihat_cek = mysqli_num_rows($lihat);
		if ($lihat_cek < 0) {
			echo "<script>location='index.php?p=piket'</script>";
		}else{
			$hari_ini = date("l");
		}
	}
 ?>

<label class="badge badge-info">Daftar Piket Siswa <?php echo $nama_kelas; ?></label>
<div class="row">
	<div class="col-md-4">
		<ul class="list-group">
		  <li class="list-group-item active" style="text-align: center;">Senin</li>
		  <?php 
		  	$query = mysqli_query($koneksi, "SELECT * FROM siswa INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas WHERE nama_kelas='$nama_kelas' AND nama_jadwal='Monday' ");
		  	$cek = mysqli_num_rows($query);
		  	if ($cek > 0) {
		  		$no = 1;
		  		while ($data = mysqli_fetch_array($query)) {
		  			?>
		  			<li class="list-group-item"><?php echo $no++; ?>. <?php echo $data['nama_siswa'] ?></li>
		  			<?php
		  		}
		  	}else{
		  		?>
		  		<li class="list-group-item">Data siswa belum di tambahkan!</li>
		  		<?php
		  	}
		   ?>
		</ul>
	</div>
	<div class="col-md-4">
		<ul class="list-group">
		  <li class="list-group-item active" style="text-align: center;">Selasa</li>
		  <?php 
		  	$query = mysqli_query($koneksi, "SELECT * FROM siswa INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas WHERE nama_kelas='$nama_kelas' AND nama_jadwal='Tuesday' ");
		  	$cek = mysqli_num_rows($query);
		  	if ($cek > 0) {
		  		$no = 1;
		  		while ($data = mysqli_fetch_array($query)) {
		  			?>
		  			<li class="list-group-item"><?php echo $no++; ?>. <?php echo $data['nama_siswa'] ?></li>
		  			<?php
		  		}
		  	}else{
		  		?>
		  		<li class="list-group-item">Data siswa belum di tambahkan!</li>
		  		<?php
		  	}
		   ?>
		</ul>
	</div>
	<div class="col-md-4">
		<ul class="list-group">
		  <li class="list-group-item active" style="text-align: center;">Rabu</li>
		  <?php 
		  	$query = mysqli_query($koneksi, "SELECT * FROM siswa INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas WHERE nama_kelas='$nama_kelas' AND nama_jadwal='Wednesday' ");
		  	$cek = mysqli_num_rows($query);
		  	if ($cek > 0) {
		  		$no = 1;
		  		while ($data = mysqli_fetch_array($query)) {
		  			?>
		  			<li class="list-group-item"><?php echo $no++; ?>. <?php echo $data['nama_siswa'] ?></li>
		  			<?php
		  		}
		  	}else{
		  		?>
		  		<li class="list-group-item">Data siswa belum di tambahkan!</li>
		  		<?php
		  	}
		   ?>
		</ul>
	</div>
	<div class="col-md-12"><hr></div>
	<div class="col-md-4">
		<ul class="list-group">
		  <li class="list-group-item active" style="text-align: center;">Kamis</li>
		  <?php 
		  	$query = mysqli_query($koneksi, "SELECT * FROM siswa INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas WHERE nama_kelas='$nama_kelas' AND nama_jadwal='Thursday' ");
		  	$cek = mysqli_num_rows($query);
		  	if ($cek > 0) {
		  		$no = 1;
		  		while ($data = mysqli_fetch_array($query)) {
		  			?>
		  			<li class="list-group-item"><?php echo $no++; ?>. <?php echo $data['nama_siswa'] ?></li>
		  			<?php
		  		}
		  	}else{
		  		?>
		  		<li class="list-group-item">Data siswa belum di tambahkan!</li>
		  		<?php
		  	}
		   ?>
		</ul>
	</div>
	<div class="col-md-4">
		<ul class="list-group">
		  <li class="list-group-item active" style="text-align: center;">Jum'at</li>
		  <?php 
		  	$query = mysqli_query($koneksi, "SELECT * FROM siswa INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas WHERE nama_kelas='$nama_kelas' AND nama_jadwal='Friday' ");
		  	$cek = mysqli_num_rows($query);
		  	if ($cek > 0) {
		  		$no = 1;
		  		while ($data = mysqli_fetch_array($query)) {
		  			?>
		  			<li class="list-group-item"><?php echo $no++; ?>. <?php echo $data['nama_siswa'] ?></li>
		  			<?php
		  		}
		  	}else{
		  		?>
		  		<li class="list-group-item">Data siswa belum di tambahkan!</li>
		  		<?php
		  	}
		   ?>
		</ul>
	</div>
	<div class="col-md-4">
		<ul class="list-group">
		  <li class="list-group-item active" style="text-align: center;">Sabtu</li>
		  <?php 
		  	$query = mysqli_query($koneksi, "SELECT * FROM siswa INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas WHERE nama_kelas='$nama_kelas' AND nama_jadwal='Saturday' ");
		  	$cek = mysqli_num_rows($query);
		  	if ($cek > 0) {
		  		$no = 1;
		  		while ($data = mysqli_fetch_array($query)) {
		  			?>
		  			<li class="list-group-item"><?php echo $no++; ?>. <?php echo $data['nama_siswa'] ?></li>
		  			<?php
		  		}
		  	}else{
		  		?>
		  		<li class="list-group-item">Data siswa belum di tambahkan!</li>
		  		<?php
		  	}
		   ?>
		</ul>
	</div>
</div>