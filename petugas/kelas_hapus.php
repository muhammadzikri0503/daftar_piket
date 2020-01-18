<?php 
	$id_kelas = $_GET['id_kelas'];
	if (empty($id_kelas)) {
		echo "<script>location='index.php?p=kelas'</script>";
	}else{
		$lihat = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas='$id_kelas' ");
		$cek = mysqli_num_rows($lihat);
		if ($cek > 0) {
			$query = mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas='$id_kelas' ");
			if ($query) {
				echo "<script>alert('Kelas Berhasil dihapus!')</script>";
				echo "<script>location='index.php?p=kelas'</script>";
			}else{
				echo "<script>alert('Kelas gagal dihapus!')</script>";
			}
		}else{
			echo "<script>location='index.php?p=kelas'</script>";
		}
	}
 ?>