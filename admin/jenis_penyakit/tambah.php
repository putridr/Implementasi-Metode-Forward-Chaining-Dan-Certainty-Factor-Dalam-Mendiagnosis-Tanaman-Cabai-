<?php $page = 'stadium';
include('../../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tambah Hama dan Penyakit | Admin</title>
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
            <h1>Tambah Hama dan Penyakit Tanaman Cabai</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="show.php">Hama dan Penyakit Tanaman Cabai</a></div>
              <div class="breadcrumb-item">Tambah Hama dan Penyakit </div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <form action="../master_file/sql.php?act=tambahStadium" method="post" enctype="multipart/form-data" >
                        <input type="text" name="id_penyakit" id="id_penyakit" class="form-control" hidden>
                        <div class="form-group">
                          <label for="nama_penyakit">Hama dan Penyakit Tanaman Cabai</label>
                          <input type="text" name="nama_penyakit" id="nama_penyakit" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label for="detail">Detail Hama dan Penyakit Tanaman Cabai</label>
                          <textarea name="detail" id="detail" class="form-control" required style="height: 100px;"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="saran">Saran</label>
                          <textarea name="saran" id="saran" class="form-control" required style="height: 100px;"></textarea>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Gambar Penyakit</label>
                          <input type="file" name="gambar_penyakit" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Saran</label>
                          <input type="file" name="gambar_saran" class="form-control" required>
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