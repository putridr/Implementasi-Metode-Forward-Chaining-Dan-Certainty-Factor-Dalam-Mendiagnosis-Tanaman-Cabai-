<?php $page = 'stadium';
include('../../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ubah Jenis Hama Penyakit | Admin</title>
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
            <h1>Ubah Jenis Hama Penyakit</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="show.php">Jenis Penyakit</a></div>
              <div class="breadcrumb-item">Ubah Jenis Penyakit</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <form action="../master_file/sql.php?act=ubahStadium" method="post" enctype="multipart/form-dat">
                        <?php
                        $id_penyakit   = $_GET['id'];
                        $query      = "SELECT * FROM jenis_penyakit WHERE id_penyakit='$id_penyakit' ";
                        $sql        = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($sql)) {
                        ?>
                          <input type="text" name="id_penyakit" id="id_penyakit" value="<?php echo $id_penyakit ?>" class="form-control" hidden>
                          <div class="form-group">
                            <label for="nama_penyakit">Nama Penyakit/Hama</label>
                            <input type="text" name="nama_penyakit" id="nama_penyakit" value="<?php echo $row['nama_penyakit'] ?>" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label for="detail">Detail Penyakit/Hama</label>
                            <textarea name="detail" id="detail" class="form-control" required style="height: 100px;"><?php echo $row['detail'] ?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="saran">Saran</label>
                            <textarea name="saran" id="saran" class="form-control" required style="height: 100px;"><?php echo $row['saran'] ?></textarea>
                          </div>
                          <div class="form-group">
                            <label class="form-label" for="gambar_penyakit">Jenis Penyakit</label>
                            <input type="file" id="gambar_penyakit" name="gambar_penyakit" class="form-control" value="<?php echo $row['gambar_penyakit'] ?>" required>
                          </div>
                          <div class="form-group">
                            <label class="form-label" for="gambar_saran">Saran dilengkapi dengan Gambar</label>
                            <input type="file" id="gambar_saran" name="gambar_saran" class="form-control" value="<?php echo $row['gambar_saran'] ?>" required>
                          </div>
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