<?php 
	$id_siswa = $_GET['id_siswa'];
	if (empty($id_siswa)) {
		echo "<script>location='index.php?p=siswa'</script>";
	}else{
		$line = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa='$id_siswa' ");
		$cek = mysqli_num_rows($line);
		if ($cek > 0) {
			$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE id_siswa='$id_siswa' ");
			if ($query) {
				echo "<script>alert('Siswa berhasil di hapus!')</script>";
				echo "<script>location='index.php?p=siswa'</script>";
			}else{
				echo "<script>alert('Siswa gagal di hapus!')</script>";
			}
		}else{
			echo "<script>location='index.php?p=siswa'</script>";
		}
	}
 ?>