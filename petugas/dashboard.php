<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">Dashboard</li>
  <li class="breadcrumb-item active">Overview</li>
</ol>

<!-- DataTables Example -->
<h3>Jadwal Piket Siswa Hari Ini</h3>
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Kelas Sepuluh (X)
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <?php 
          $query = mysqli_query($koneksi, "SELECT * FROM kelas WHERE kelas='X' ");
          $cek = mysqli_num_rows($query);
          if ($cek > 0) {
            while ($data = mysqli_fetch_array($query)) {
              ?>
              <a href="index.php?p=sekarang&nama_kelas=<?php echo $data['nama_kelas'] ?>" class="badge badge-success"><?php echo $data['nama_kelas'] ?></a>
              <?php
            }
          }else{
            ?>
            <label class="badge badge-warning">Data siswa tidak ada!</label>
            <?php
          }
         ?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Kelas Sebelas (XI)
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <?php 
          $query2 = mysqli_query($koneksi, "SELECT * FROM kelas WHERE kelas='XI' ");
          $cek2 = mysqli_num_rows($query2);
          if ($cek2 > 0) {
            while ($data2 = mysqli_fetch_array($query2)) {
              ?>
              <a href="index.php?p=sekarang&nama_kelas=<?php echo $data2['nama_kelas'] ?>" class="badge badge-success"><?php echo $data2['nama_kelas'] ?></a>
              <?php
            }
          }else{
            ?>
            <label class="badge badge-warning">Data siswa tidak ada!</label>
            <?php
          }
         ?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Kelas Dua Belas (XII)
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <?php 
          $query3 = mysqli_query($koneksi, "SELECT * FROM kelas WHERE kelas='XII' ");
          $cek3 = mysqli_num_rows($query3);
          if ($cek3 > 0) {
            while ($data3 = mysqli_fetch_array($query3)) {
              ?>
              <a href="index.php?p=sekarang&nama_kelas=<?php echo $data3['nama_kelas'] ?>" class="badge badge-success"><?php echo $data3['nama_kelas'] ?></a>
              <?php
            }
          }else{
            ?>
            <label class="badge badge-warning">Data siswa tidak ada!</label>
            <?php
          }
         ?>
      </div>
    </div>
  </div>
</div>