<ol class="breadcrumb">
	<li class="breadcrumb-item">Dashboard</li>
	<li class="breadcrumb-item active">Daftar Piket Hari ini</li>
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

<label class="badge badge-info">Daftar Piket Siswa <?php echo $nama_kelas; ?> hari ini</label>
<div class="row">
	<div class="col-md-4">
		<ul class="list-group">
		  <li class="list-group-item active" style="text-align: center;">
		  	<?php 
		  		if ($hari_ini == "Monday") {
		  			?>Senin<?php
		  		}
		  		elseif ($hari_ini == "Tuesday") {
		  			?>Selasa<?php
		  		}
		  		elseif ($hari_ini == "Wednesday") {
		  			?>Rabu<?php
		  		}
		  		elseif ($hari_ini == "Thursday") {
		  			?>Kamis<?php
		  		}
		  		elseif ($hari_ini == "Friday") {
		  			?>Jum'at<?php
		  		}
		  		elseif ($hari_ini == "Saturday") {
		  			?>Sabtu<?php
		  		}
		  	 ?>
		  </li>
		  <?php 
		  	$query = mysqli_query($koneksi, "SELECT * FROM siswa INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas WHERE nama_kelas='$nama_kelas' AND nama_jadwal='$hari_ini' ");
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