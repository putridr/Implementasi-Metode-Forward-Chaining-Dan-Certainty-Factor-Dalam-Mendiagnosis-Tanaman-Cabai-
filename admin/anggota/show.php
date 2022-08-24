<?php $page = 'anggota';
include('../../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Anggota | Admin</title>
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
              <h1>Anggota</h1>
            </div>
            <div class="col-md-2">
              <a href="tambah.php" class="btn btn-success" style="float: right;">
                Tambah Anggota
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
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>Status</th>
                            <?php if ($jabatan == '1') {
                            ?>
                              <th width='15%'>Aksi</th>
                            <?php
                            } ?>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $query = "SELECT * FROM admin";
                          $sql = mysqli_query($koneksi, $query);
                          $no = 1;
                          while ($row = mysqli_fetch_array($sql)) {
                          ?>
                            <tr class="text-center">
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $row['nama']; ?></td>
                              <td><?php echo $row['username']; ?></td>
                              <td>
                                <?php
                                if ($row['status'] == 1) {
                                  echo "<div class='badge badge-success'>Aktif</div>";
                                } else {
                                  echo "<div class='badge badge-warning'>Tidak Aktif</div>";
                                }
                                ?>
                              </td>
                              <?php if ($jabatan == '1') {
                              ?>
                                <td>
                                  <a href="ubah.php?id=<?php echo $row['id_admin'] ?>" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-cog"></i></a>
                                  <a href="#" class="btn btn-danger btn-flat btn-xs" data-toggle="modal" data-target="#deleteuser<?php echo $no; ?>"><i class="fa fa-trash"></i></a>

                                  <!-- modal delete -->
                                  <div class="modal fade" style="overflow-x: visible;" id="deleteuser<?php echo $no; ?>" data-toggle="modal">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">Hapus Data Anggota</h5>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                          Apakah anda yakin ingin menghapus anggota dengan username <?php echo $row['username'] ?> ?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                          <a href="../master_file/sql.php?act=hapusAnggota&id=<?php echo $row['id_admin'] ?>" class="btn btn-danger">Hapus</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                </td>
                              <?php
                              } ?>
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