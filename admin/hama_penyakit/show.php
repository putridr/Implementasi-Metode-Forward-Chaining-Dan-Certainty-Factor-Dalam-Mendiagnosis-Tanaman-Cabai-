<?php $page = 'stadium';
include('../../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Jenis Hama/Penyakit | Admin</title>
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
            <div class="col-md-10">
              <h1>Jenis Hama/Penyakit</h1>
            </div>
            <div class="col-md-2">
              <a href="tambah.php" class="btn btn-success" style="float: right;">
                Tambah Hama/Penyakit
              </a>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table_Stadium" width="100%">
                        <thead>
                          <tr class="text-center">
                            <th>
                              #
                            </th>
                            <th>Jenis Hama/Penyakit</th>
                            <th>Detail</th>
                            <th>Saran</th>
                            <th width='15%'>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $query = "SELECT * FROM stadium_penyakit";
                          $sql = mysqli_query($koneksi, $query);
                          $no = 1;
                          while ($row = mysqli_fetch_array($sql)) {
                          ?>
                            <tr style="text-align: justify;">
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $row['stadium_penyakit']; ?></td>
                              <td><?php echo $row['detail']; ?></td>
                              <td><?php echo $row['saran'] ?></td>
                              <td style="text-align: center;">
                                <a href="ubah.php?id=<?php echo $row['id_penyakit'] ?> " class="btn btn-primary btn-flat btn-xs"><i class="fa fa-cog"></i></a>
                                <a href="#" class="btn btn-danger btn-flat btn-xs" data-toggle="modal" data-target="#hapusStadium<?php echo $no; ?>"><i class="fa fa-trash"></i></a>

                                <!-- modal delete -->
                                <div class="modal fade" style="overflow-x: visible;" id="hapusStadium<?php echo $no; ?>" data-toggle="modal">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Hapus Hama dan Penyakit</h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <div class="modal-body" style="text-align: justify;">
                                        Apakah anda yakin ingin menghapus <?php echo $row['stadium_penyakit'] ?> penyakit HIV/AIDS ?
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                        <a href="../master_file/sql.php?act=hapusStadium&id=<?php echo $row['id_penyakit'] ?>" class="btn btn-danger">Hapus</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
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

  <!-- Modal Tambah Stadium-->
  <div class="modal fade" id="tambahStadium" data-toggle="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Hama/Penyakit</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="master/sql.php?act=tambahStadium" method="post">
            <input type="text" name="id_penyakit" id="id_penyakit" class="form-control" hidden>
            <div class="form-group">
              <label for="stadium_penyakit">Stadium HIV/AIDS</label>
              <input type="text" name="stadium_penyakit" id="stadium_penyakit" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="detail">Detail Stadium HIV/AIDS</label>
              <textarea name="detail" id="detail" class="form-control" required style="height: 100px;"></textarea>
            </div>
            <div class="form-group">
              <label for="saran">Saran</label>
              <textarea name="saran" id="saran" class="form-control" required style="height: 100px;"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
          </form>
        </div>
      </div>
    </div>
  </div>

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

    $('#table_Stadium').dataTable({
      "language": {
        "emptyTable": "Tidak ada data untuk ditampilkan"
      },
      "searching": true,
      "scrollX": true
    });
  </script>
</body>
</html>