<?php $page = 'beranda';
include('../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Beranda | Admin</title>
  <?php include('master_file/head.php') ?>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <?php include('master_file/navbar.php') ?>
      <div class="main-sidebar">
        <?php include('master_file/aside.php') ?>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Beranda</h1>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="container" style="margin: 15px 5px 15px 0;">
                    <?php
                    $query = "SELECT * FROM admin WHERE id_admin='$id'";
                    $sql = mysqli_query($koneksi, $query);
                      while ($row = mysqli_fetch_array($sql)) {
                        echo "<h1>Selamat Datang di Halamanan Admin Our Sispak</h1>";
                      }
                    ?>
                    <h3>Sistem yang akan berfungsi untuk membantu para petani dalam mendiagnosa Hama dan Penyakit Tanaman Cabai Rawit</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Anggota</h4>
                  </div>
                  <div class="card-body">
                    <?php
                      $query = mysqli_query($koneksi, "SELECT * FROM admin");
                      $hasil = mysqli_num_rows($query);
                      echo $hasil;
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Hama dan Penyakit</h4>
                  </div>
                  <div class="card-body">
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM jenis_penyakit");
                    $hasil = mysqli_num_rows($query);
                    echo $hasil;
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Basis Pengetahuan</h4>
                  </div>
                  <div class="card-body">
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM basis_pengetahuan");
                    $hasil = mysqli_num_rows($query);
                    echo $hasil;
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <?php include('master_file/footer.php') ?>
    </div>
  </div>
  <?php include('master_file/javascript.php') ?>
</body>

</html>