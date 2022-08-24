<?php $page = 'anggota';
include('../../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Profile | Admin</title>
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
            <h1>Profil</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-lg-12 col-12">
                <div class="card card-statistic-1">
                  <div class="card-wrap">
                    <div class="card-body">
                      <div style="margin: 3%;">
                        <?php
                        $query = "SELECT * FROM admin WHERE id_admin=$id";
                        $sql = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($sql)) {
                        ?>
                          <form action="../master_file/sql.php?act=profil" method="post">
                            <input type="text" name="id_admin" id="id_admin" class="form-control" value="<?php echo $id ?>" hidden>
                            <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $row['nama'] ?>" required>
                            </div>
                            <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" name="username" id="username" class="form-control" value="<?php echo $row['username'] ?>" required>
                            </div>
                            <div class="form-group">
                              <label for="password">Kata Sandi</label>
                              <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary" style="float: right;" value="Simpan">
                            <br>
                          </form>
                        <?php
                        }
                        ?>
                      </div>
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
<script>
  window.onload = function() {
    <?php if (isset($_SESSION['msg'])) : ?>
      swal({
        title: "Berhasil!",
        text: "<?= $_SESSION['msg'] ?? "Data berhasil disimpan!" ?>",
        icon: "success",
      });
    <?php
      unset($_SESSION['msg']);
    endif; ?>

    <?php if (isset($_SESSION['err'])) : ?>
      swal({
        title: "Error!",
        text: "<?= $_SESSION['err'] ?? "Terjadi kesalahan saat menyimpan data!" ?>",
        icon: "error",
      });
    <?php
      unset($_SESSION['err']);
    endif; ?>
  }
</script>

</html>