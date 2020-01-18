<?php 
  include'../koneksi.php';
  
  session_start();
  if (!isset($_SESSION['username'])) {
    echo "<script>alert('Anda harus login terlebih dahulu!')</script>";
    echo "<script>location='../index.php'</script>";
  }elseif ($_SESSION['data']['nama_level'] != "admin") {
    echo "<script>alert('Anda bukan admin!')</script>";
    echo "<script>location='../logout.php'</script>";
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daftar Piket</title>
  <link rel="icon" type="image/png" href="../laundry.png">
  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="index.php"><?php echo $_SESSION['data']['nama_petugas'] ?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a onclick="return confirm('Apakah anda yakin ingin logout?')" class="dropdown-item" href="../logout.php"><i class="fa fa-sign-out-alt"> Logout</i></a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php?p=dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?p=petugas">
          <i class="fas fa-fw fa-user-tag"></i>
          <span>Petugas</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?p=kelas">
          <i class="fas fa-fw fa-server"></i>
          <span>Kelas</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?p=siswa">
          <i class="fas fa-fw fa-users"></i>
          <span>Siswa</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?p=piket">
          <i class="fas fa-fw fa-calendar-alt"></i>
          <span>Daftar Piket</span>
        </a>
      </li>
    </ul>

    <div id="content-wrapper">
      <div class="container-fluid">
        <?php 
          if (@$_GET['p'] == "") {
            include'dashboard.php';
          }
          else if(@$_GET['p'] == "dashboard") {
            include'dashboard.php';
          }
          else if(@$_GET['p'] == "petugas") {
            include'petugas.php';
          }
          else if(@$_GET['p'] == "petugas_tambah") {
            include'petugas_tambah.php';
          }
          else if(@$_GET['p'] == "petugas_edit") {
            include'petugas_edit.php';
          }
          else if(@$_GET['p'] == "petugas_hapus") {
            include'petugas_hapus.php';
          }
          else if(@$_GET['p'] == "kelas") {
            include'kelas.php';
          }
          else if(@$_GET['p'] == "kelas_tambah") {
            include'kelas_tambah.php';
          }
          else if(@$_GET['p'] == "kelas_edit") {
            include'kelas_edit.php';
          }
          else if(@$_GET['p'] == "kelas_hapus") {
            include'kelas_hapus.php';
          }
          else if(@$_GET['p'] == "siswa") {
            include'siswa.php';
          }
          else if(@$_GET['p'] == "siswa_tambah") {
            include'siswa_tambah.php';
          }
          else if(@$_GET['p'] == "siswa_edit") {
            include'siswa_edit.php';
          }
          else if(@$_GET['p'] == "siswa_hapus") {
            include'siswa_hapus.php';
          }
          else if(@$_GET['p'] == "piket") {
            include'piket.php';
          }
          else if(@$_GET['p'] == "daftar_piket") {
            include'daftar_piket.php';
          }
          else if(@$_GET['p'] == "sekarang") {
            include'sekarang.php';
          }
         ?>
      </div>
      <!-- /.container-fluid -->
      <br>
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © 2019</span>
          </div>
        </div>
      </footer>
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>

</body>
</html>
