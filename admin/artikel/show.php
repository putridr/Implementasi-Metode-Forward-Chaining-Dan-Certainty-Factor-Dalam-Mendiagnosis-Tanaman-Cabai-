<?php $page = 'artikel';
include('../../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Artikel | Admin</title>
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
              <h1>Artikel</h1>
            </div>
            <div class="col-md-2">
              <a class="btn btn-success" style="float: right;" href="tambah.php">
                Tambah Artikel
              </a>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table_anggota" width="100%">
                        <thead>
                          <tr class="text-center">
                            <th>#</th>
                            <th>Tanggal</th>
                            <th width='50%'>Judul</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $query = "SELECT * FROM artikel";
                          $sql = mysqli_query($koneksi, $query);
                          $no = 1;
                          while ($row = mysqli_fetch_array($sql)) {
                          ?>
                            <tr class="text-center">
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $row['tanggal_dibuat']; ?></td>
                              <td style="text-align: justify;"><?php echo $row['judul']; ?></td>
                              <td>
                                <?php
                                if ($row['status'] == 1) {
                                  echo "<div class='badge badge-success'>Terbit</div>";
                                } else {
                                  echo "<div class='badge badge-warning'>Belum Terbit</div>";
                                }
                                ?>
                              </td>
                              <td>
                                <a href="detail.php?id=<?php echo $row['id_artikel'] ?>" class="btn btn-success btn-flat btn-xs"><i class="fa fa-info" aria-hidden="true"></i></a>
                                <a href="ubah.php?id=<?php echo $row['id_artikel'] ?>" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-cog" aria-hidden="true"></i></a>
                                <a href="#" class="btn btn-danger btn-flat btn-xs" data-toggle="modal" data-target="#deleteArtikel<?php echo $no; ?>"><i class="fa fa-trash"></i></a>

                                <!-- modal delete -->
                                <div class="modal fade" style="overflow-x: visible;" id="deleteArtikel<?php echo $no; ?>" data-toggle="modal">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Hapus Artikel</h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <div class="modal-body" style="text-align: justify;">
                                        Apakah anda yakin ingin menghapus artikel dengan judul <?php echo $row['judul'] ?> ?
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                        <a href="../master_file/sql.php?act=hapusArtikel&id=<?php echo $row['id_artikel'] ?>&gambar=<?php echo $row['gambar'] ?>" class="btn btn-danger">Hapus</a>
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

    $('#table_anggota').dataTable({
      "language": {
        "emptyTable": "Tidak ada data untuk ditampilkan"
      },
      "searching": true,
      "scrollX": true
    });
  </script>
</body>

</html>