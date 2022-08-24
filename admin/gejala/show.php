<?php $page = 'gejala';
include('../../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Gejala | Admin</title>
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
              <h1>Gejala</h1>
            </div>
            <div class="col-md-2">
              <a href="tambah.php" class="btn btn-success" style="float: right;">
                Tambah Gejala
              </a>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table_Gejala" width="100%">
                        <thead>
                          <tr class="text-center">
                            <th width='7%'>#</th>
                            <th>Gejala</th>
                            <th>Gambar</th>
                            <th width='15%'>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $query = "SELECT * FROM gejala";
                          $sql = mysqli_query($koneksi, $query);
                          $no = 1;
                          while ($row = mysqli_fetch_array($sql)) {
                          ?>
                            <tr class="text-center">
                              <td><?php echo $no++ ?></td>
                              <td style="text-align: justify;"><?php echo $row['gejala']; ?></td>
                              <td>
                                <?php
                                if ($row['gambar_gejala'] == "") { ?>
                                  <img src="https://via.placeholder.com/500x500.png?text=No-Image" style="width:100px;height:100px;">
                                <?php } else { ?>
                                  <img src="../master_file/foto/<?php echo $row['gambar_gejala']; ?>" style="width:100px;height:100px;">
                                <?php } ?>
                              </td>
                              <td>
                                <a href="ubah.php?id=<?php echo $row['id_gejala'] ?>" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-cog"></i></a>
                                <a href="#" class="btn btn-danger btn-flat btn-xs" data-toggle="modal" data-target="#deleteGejala<?php echo $no; ?>"><i class="fa fa-trash"></i></a>

                                <!-- modal delete -->
                                <div class="modal fade" style="overflow-x: visible;" id="deleteGejala<?php echo $no; ?>" data-toggle="modal">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Hapus Gejala</h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <div class="modal-body" style="text-align: left;">
                                        Apakah anda yakin ingin menghapus gejala "<?php echo $row['gejala'] ?>" ?
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                        <a href="../master_file/sql.php?act=hapusGejala&id=<?php echo $row['id_gejala'] ?>" class="btn btn-danger">Hapus</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- modal update -->
                                <div class="modal fade" style="overflow-x: visible;" id="updateGejala<?php echo $no; ?>" data-toggle="modal">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Ubah Data Gejala</h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <div class="modal-body" style="text-align: left;">
                                        <form action="master/sql.php?act=ubahGejala" method="post">
                                          <input type="text" name="id_gejala" id="id_gejala" value="<?php echo $row['id_gejala'] ?>" class="form-control" hidden>
                                          <div class="form-group">
                                            <label for="gejala">Gejala</label>
                                            <input type="text" name="gejala" id="gejala" value="<?php echo $row['gejala'] ?>" class="form-control" required>
                                          </div>
                                          <div class="form-group">
                                            <label class="form-label">Gambar Gejala</label>
                                            <input type="file" id="gambar_gejala" value="<?php echo $row['gambar_gejala'] ?>" name="gambar_gejala" class="form-control" required>
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
    $('#table_Gejala').dataTable({
      "language": {
        "emptyTable": "Tidak ada data untuk ditampilkan"
      },
      "searching": true,
      "scrollX": true
    });
  </script>
</body>

</html>