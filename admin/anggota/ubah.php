<?php $page = 'anggota';
include('../../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ubah Anggota | Admin</title>
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
            <h1>Ubah Data Anggota</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="show.php">Anggota</a></div>
              <div class="breadcrumb-item">Ubah Anggota</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <form action="../master_file/sql.php?act=ubahAnggota" method="post">
                        <?php
                        $id_admin   = $_GET['id'];
                        $query      = "SELECT * FROM admin WHERE id_admin='$id_admin' ";
                        $sql        = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($sql)) {
                        ?>
                          <input type="text" name="id_admin" id="id_admin" value="<?php echo $id_admin ?>" class="form-control" hidden>
                          <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" value="<?php echo $row['nama'] ?>" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" value="<?php echo $row['username'] ?>" class="form-control" required>
                          </div>
                          <?php if ($jabatan == '1') {
                          ?>
                            <div class="form-group">
                              <label class="form-label">Status</label>
                              <div class="selectgroup w-100">
                                <label class="selectgroup-item">
                                  <input type="radio" name="status" value="1" class="selectgroup-input" <?php if ($row['status'] == 1) { ?>checked="" <?php } ?>>
                                  <span class="selectgroup-button">Aktif</span>
                                </label>
                                <label class="selectgroup-item">
                                  <input type="radio" name="status" value="2" class="selectgroup-input" <?php if ($row['status'] == 2) { ?>checked="" <?php } ?>>
                                  <span class="selectgroup-button">Tidak Aktif</span>
                                </label>
                              </div>
                            </div>
                          <?php
                          } ?>
                          <div class="form-group" style="float: right;">
                            <button type="reset" class="btn btn-danger">Bersihkan</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                          </div>
                        <?php } ?>
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