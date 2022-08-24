<?php $page = 'gejala';
include('../../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ubah Gejala | Admin</title>
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
            <h1>Ubah Gejala</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="show.php">Gejala</a></div>
              <div class="breadcrumb-item">Ubah Gejala</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <form action="../master_file/sql.php?act=ubahGejala" method="post" enctype="multipart/form-data">
                        <?php
                        $id_gejala   = $_GET['id'];
                        $query      = "SELECT * FROM gejala WHERE id_gejala='$id_gejala' ";
                        $sql        = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($sql)) {
                        ?>
                          <input type="text" name="id_gejala" id="id_gejala" value="<?php echo $id_gejala ?>" hidden>
                          <div class="form-group">
                            <label for="gejala">Gejala</label>
                            <input type="text" name="gejala" id="gejala" value="<?php echo $row['gejala'] ?>" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label class="form-label">Gambar Gejala</label>
                            <input type="file" name="gambar_gejala" class="form-control" required>
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