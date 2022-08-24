<?php $page = 'basis_pengetahuan';
include('../../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ubah Pengetahuan | Admin</title>
  <link rel="stylesheet" href="../../../assets/admin/css/select2.min.css">
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
            <h1>Ubah Pengetahuan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="show.php">Pengetahuan</a></div>
              <div class="breadcrumb-item">Ubah Pengetahuan</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <form action="../master_file/sql.php?act=ubahPengetahuan" method="post">
                        <?php
                        $id_pengetahuan   = $_GET['id'];
                        $query      = "SELECT * FROM basis_pengetahuan WHERE id_pengetahuan='$id_pengetahuan' ";
                        $sql        = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($sql)) {
                        ?>
                          <div class="form-group">
                            <label for="stadium">Hama dan Penyakit Tanaman Cabai</label>
                            <input type="hidden" name="id_pengetahuan" value="<?php echo $id_pengetahuan ?>">
                            <select name="stadium" id="stadium" class="form-control select2" required>
                              <?php
                              $query = "SELECT * FROM jenis_penyakit";
                              $sql = mysqli_query($koneksi, $query);
                              while ($b = mysqli_fetch_array($sql)) {
                              ?>
                                <option value="<?php echo $b['id_penyakit'] ?>" <?php if ($row['id_penyakit'] == $b['id_penyakit']) {
                                                                                  echo "selected";
                                                                                } ?>><?php echo $b['nama_penyakit'] ?></option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="gejala">Gejala</label>
                            <select name="gejala" id="gejala" class="form-control select2" required>
                              <?php
                              $query = "SELECT * FROM gejala";
                              $sql = mysqli_query($koneksi, $query);
                              while ($a = mysqli_fetch_array($sql)) {
                              ?>
                                <option value="<?php echo $a['id_gejala'] ?>" <?php if ($row['id_gejala'] == $a['id_gejala']) {
                                                                                echo "selected";
                                                                              } ?>><?php echo $a['gejala'] ?></option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="nilai_cf">Nilai CF</label>
                            <input type="number" step="0.1" name="nilai_cf" id="nilai_cf" value="<?php echo $row['nilai_cf'] ?>" class="form-control" required>
                            <label>* Untuk angka desimal gunakan tanda titik (.) , contoh : 0.5</label>
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
</body>
<?php include('../master_file/javascript.php') ?>

<script src="../../../assets/admin/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    $('.select2').select2();
  });
</script>

</html>