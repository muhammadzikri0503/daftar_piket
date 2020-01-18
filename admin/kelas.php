<ol class="breadcrumb">
	<li class="breadcrumb-item">Kelas</li>
	<li class="breadcrumb-item active">Data Kelas</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-server"></i>
    Data Kelas</div><br>
    <div class="col-md-3"><a href="index.php?p=kelas_tambah" class="btn btn-primary">Tambah</a></div>
    <div class="card-body">
    	<div class="table-responsive">
	      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	        <thead>
	          <tr>
	            <th>No</th>
	            <th>Kelas</th>
	            <th>Nama Kelas</th>
	            <th>Opsi</th>
	          </tr>
	        </thead>
	        <tbody>
	         	<?php 
	         		$query = mysqli_query($koneksi, "SELECT * FROM kelas");
	         		$no = 1;
	         		while ($data = mysqli_fetch_array($query)) {
	         			?>
	         			<tr>
	         				<td><?php echo $no++; ?></td>
	         				<td><?php echo $data['kelas'] ?></td>
	         				<td><?php echo $data['nama_kelas'] ?></td>
	         				<td>
	         					<a class="btn btn-warning btn-sm" href="index.php?p=kelas_edit&id_kelas=<?php echo $data['id_kelas'] ?>"><i class="fa fa-edit"></i></a>
	         					<a onclick="return confirm('Apakah anda yakin ingin menghapus kelas ini?')" class="btn btn-danger btn-sm" href="index.php?p=kelas_hapus&id_kelas=<?php echo $data['id_kelas'] ?>"><i class="fa fa-trash-alt"></i></a></td>
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