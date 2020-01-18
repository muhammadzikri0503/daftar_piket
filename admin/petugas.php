<ol class="breadcrumb">
	<li class="breadcrumb-item">Petugas</li>
	<li class="breadcrumb-item active">Data Petugas</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-user-plus"></i>
    Data Petugas</div><br>
    <div class="col-md-3"><a href="index.php?p=petugas_tambah" class="btn btn-primary">Tambah</a></div>
    <div class="card-body">
    	<div class="table-responsive">
	      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	        <thead>
	          <tr>
	            <th>No</th>
	            <th>Nama Petugas</th>
	            <th>Jenis Kelamin</th>
	            <th>Username</th>
	            <th>Opsi</th>
	          </tr>
	        </thead>
	        <tbody>
	          <?php 
	          	$query = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_level='2' ");
	          	$no = 1;
	          	while ($data = mysqli_fetch_assoc($query)) {
	          		?>
	          		<tr>
	          			<td><?php echo $no++; ?></td>
	          			<td><?php echo $data['nama_petugas'] ?></td>
	          			<td><?php echo $data['jenis_kelamin'] ?></td>
	          			<td><?php echo $data['username'] ?></td>
	          			<td>
	          				<a class="btn btn-warning btn-sm" href="index.php?p=petugas_edit&id_petugas=<?php echo $data['id_petugas'] ?>"><i class="fa fa-edit"></i></a>
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