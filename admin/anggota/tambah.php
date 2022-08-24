<?php $page = 'anggota';
include('../../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tambah Anggota | Admin</title>
  <?php include('../master_file/head.php') ?>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <?php include('../master_file/navbar.php') ?>
      <div class="main-sidebar">
        <?php include('../master_file/aside.php') ?>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Anggota</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="show.php">Anggota</a></div>
              <div class="breadcrumb-item">Tambah Anggota</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <form action="../master_file/sql.php?act=tambahAnggota" method="post">
                        <input type="text" name="id_admin" id="id_admin" class="form-control" hidden>
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label for="password">Kata Sandi</label>
                          <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group" style="float: right;">
                          <button type="reset" class="btn btn-danger">Bersihkan</button>
                          <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php include('../master_file/footer.php') ?>
    </div>
  </div>
  <?php include('../master_file/javascript.php') ?>

</body>

</html>