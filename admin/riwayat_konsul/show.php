<?php $page = 'riwayat';
include('../../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Riwayat Konsultasi | Admin</title>
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
              <h1>Riwayat Konsultasi</h1>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover" id="table_anggota" width="100%">
                        <thead>
                          <tr class="text-center">
                            <th>
                              #
                            </th>
                            <th>Nama</th>
                            <th>Penyakit/Hama</th>
                            <th>Nilai Akurasi</th>
                            <th width='5%'>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $query = "SELECT * FROM hasil_konsultasi INNER JOIN jenis_penyakit ON hasil_konsultasi.id_penyakit=jenis_penyakit.id_penyakit INNER JOIN pengguna ON hasil_konsultasi.id_pengguna = pengguna.id_pengguna ORDER BY id_hasil DESC";
                          $sql = mysqli_query($koneksi, $query);
                          $no = 1;
                          while ($row = mysqli_fetch_array($sql)) {
                          ?>
                            <tr class="text-center">
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $row['nama'] ?></td>
                              <td><?php echo $row['nama_penyakit']; ?></td>
                              <td>
                                <?php
                                if ($row['nilai_akurasi'] == 0) {
                                  echo '100%';
                                } else {
                                  echo $row['nilai_akurasi'] * 100;
                                  echo ' %';
                                }
                                ?>
                              </td>
                              <td>
                                <a href="detail_konsultasi.php?id=<?php echo $row['id_hasil'] ?>" class="btn btn-success btn-flat btn-xs"><i class="fa fa-info" aria-hidden="true"></i></a>
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

</body>
<script>
  $('#table_anggota').dataTable({
    "language": {
      "emptyTable": "Tidak ada data untuk ditampilkan"
    },
    "searching": true,
    "scrollX": true
  });
</script>

</html>