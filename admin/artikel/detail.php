<?php $page = 'artikel';
include('../../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Detail Artikel | Admin</title>
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
            <h1>Detail Artikel</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="show.php">Artikel</a></div>
              <div class="breadcrumb-item">Detail Artikel</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-lg-9">
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <?php
                      $id_artikel = $_GET['id'];
                      $query = "SELECT * FROM artikel INNER JOIN admin ON artikel.id_admin = admin.id_admin WHERE id_artikel = '$id_artikel'";
                      $sql = mysqli_query($koneksi, $query);
                      while ($row = mysqli_fetch_array($sql)) {
                      ?>
                        <table width='100%'>

                          <tr>
                            <td colspan="3" style="text-align: center;"><img src="/sispak/assets/gambar/<?php echo $row['gambar'] ?>" style="width: 50%;padding:5%;" alt="<?php echo $row['gambar'] ?>"></td>

                          </tr>
                          <tr>
                            <td width='20%'>Judul</td>
                            <td width='3%'>:</td>
                            <td style="text-align: justify;"><?php echo $row['judul'] ?></td>
                          </tr>
                          <tr>
                            <td>Dibuat oleh</td>
                            <td>:</td>
                            <td><?php echo $row['nama'] ?></td>
                          </tr>
                          <tr>
                            <td>Dibuat pada</td>
                            <td>:</td>
                            <td><?php echo $row['tanggal_dibuat'] ?></td>
                          </tr>
                          <tr>
                            <td>Terakhir diubah pada</td>
                            <td>:</td>
                            <td><?php echo $row['tanggal_diubah'] ?></td>
                          </tr>
                          <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td><?php if ($row['status'] == 1) {
                                  echo 'Terbit';
                                } else {
                                  echo 'Belum Terbit';
                                } ?></td>
                          </tr>
                          <tr>
                            <td>Isi</td>
                            <td>:</td>
                            <td style="text-align: justify;"><?php echo $row['isi'] ?></td>
                          </tr>
                        </table>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card">
                  <div class="row">
                    <div class="container">
                      <div class="card-body">
                        <h6>Aksi</h6>
                        <hr>
                        <a class="btn btn-primary" style="width: 100%;margin-bottom:10px" href="ubah.php?id=<?php echo $id_artikel ?>">Ubah Artikel</a>
                        <a class="btn btn-danger" style="width: 100%;margin-bottom:10px" onclick="return confirm('Apakah anda yakin akan menghapus artikel tersebut ?')" href="../master_file/sql.php?act=hapusArtikel&id=<?php echo $id_artikel ?>">Hapus Artikel</a>
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
</body>
<?php include('../master_file/javascript.php') ?>

</html>