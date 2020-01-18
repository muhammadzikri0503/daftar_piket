<ol class="breadcrumb">
	<li class="breadcrumb-item">Siswa</li>
	<li class="breadcrumb-item active">Data Siswa</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-users"></i>
    Data Siswa</div><br>
    <div class="col-md-3"><a href="index.php?p=siswa_tambah" class="btn btn-primary">Tambah</a></div>
    <div class="card-body">
    	<div class="table-responsive">
	      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	        <thead>
	          <tr>
	            <th>No</th>
	            <th>Nama Siswa</th>
	            <th>Jenis Kelamin</th>
	            <th>Jurusan</th>
	            <th>Kelas</th>
	            <th>Jadwal Piket</th>
	            <th>Opsi</th>
	          </tr>
	        </thead>
	        <tbody>
	         	<?php 
	         		$hari_ini = date("l");
	         		$query = mysqli_query($koneksi, "SELECT * FROM siswa INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas ");
	         		$no = 1;
	         		while ($data = mysqli_fetch_assoc($query)) {
	         			?>
	         			<tr>
	         				<td><?php echo $no++; ?></td>
	         				<td><?php echo $data['nama_siswa'] ?></td>
	         				<td><?php echo $data['jenis_kelamin'] ?></td>
	         				<td><?php echo $data['nama_jurusan'] ?></td>
	         				<td><?php echo $data['nama_kelas'] ?></td>
	         				<?php 
	         					if ($data['nama_jadwal'] == "Monday") {
	         						?>
	         						<td>Senin</td>
	         						<?php
	         					}
	         					elseif ($data['nama_jadwal'] == "Tuesday") {
	         						?>
	         						<td>Selasa</td>
	         						<?php
	         					}
	         					elseif ($data['nama_jadwal'] == "Wednesday") {
	         						?>
	         						<td>Rabu</td>
	         						<?php
	         					}
	         					elseif ($data['nama_jadwal'] == "Thursday") {
	         						?>
	         						<td>Kamis</td>
	         						<?php
	         					}
	         					elseif ($data['nama_jadwal'] == "Friday") {
	         						?>
	         						<td>Jum'at</td>
	         						<?php
	         					}
	         					elseif ($data['nama_jadwal'] == "Saturday") {
	         						?>
	         						<td>Sabtu</td>
	         						<?php
	         					}
	         				 ?>
	         				 <td>
	         				 	<a class="btn btn-warning btn-sm" title="Edit" href="index.php?p=siswa_edit&id_siswa=<?php echo $data['id_siswa'] ?>"><i class="fa fa-edit"></i></a>
	         				 	<a href="index.php?p=siswa_hapus&id_siswa=<?php echo $data['id_siswa'] ?>" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus siswa ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></a>
	         				 </td>
	         			</tr>
	         			<?php
	         		}
	         	 ?>
	        </tbody>
	      </table>
	    </div>
     </div>
  </div>
</div>