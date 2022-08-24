<?php $page = 'about' ?>
<html lang="en">

<head>
  <?php include('head.php') ?>
  <style>
    .content {
      margin-top: 5%;
      margin-right: 5%;
      margin-left: 5%;
      /* background-color: red; */
      /* max-width: 1170px; */
    }

    .section {
      padding-top: 6px;
      padding-left: 15px;
      width: 100%;
      margin-bottom: 2%;
      /* background-color: yellow; */
    }
  </style>
</head>

<body class="scroll">
  <?php include('navbar.php'); ?>
  <div class="content">
    <div class="container d-flex justify-content-between">
      <div class="section">
        <br></br><br></br>
        <img src="/sispak/assets/gambar/logo.png" alt="logo.png" class="logo-bio">
        <br></br><br></br>
        <p class="h1-bio">Sistem Pakar Diagnosa Hama dan Penyakit Tanaman Cabai Rawit dengan Metode<i> Forward Chaining</i> dan <i>Certainty Factor</i></p>
        <div class="biodata">
          <button type="button" class="btn btn-primary btn-bio" style="font-weight: 500;" data-toggle="modal" data-target="#modalPengembang">
            Pengembang Aplikasi
          </button>
          <button type="button" class="btn btn-primary btn-bio" style="font-weight: 500;" data-toggle="modal" data-target="#modalPakar">
            Pakar
          </button>
          <button type="button" class="btn btn-primary btn-bio" style="font-weight: 500;" data-toggle="modal" data-target="#modalDosbing">
            Dosen Pembimbing
          </button>
        </div>
        <div class="container">
          <p class="deskripsi-bio">
            Sistem pakar diagnosa Hama dan Penyakit Tanaman Cabai Rawit ini mampu melakukan diagnosa awal dengan memanfaatkan pengetahuan yang bersumber dari pakar serta berdasarkan berbagai macam studi literatur. Penelitian ini menggunakan metode <i>forward chaining</i> sebagai mesin inferensi dan menggunakan metode <i>certainty factor</i> untuk menghitung tingkat kepercayaan pakar terhadap hasil diagnosis yang diberikan oleh sistem.
          </p>
        </div>
        <!-- Modal Pengembang Web -->
        <div class="modal fade" id="modalPengembang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Biodata Pengembang Web</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <table style="width: 95%" align="center">
                  <tr>
                    <img src="/sispak/assets/image/putri.jpg" style="width: 200px;display:block;margin:auto" alt="Putri Dwi Rahayu.jpg">
                    <br>
                  </tr>
                  <tr>
                                        <td style="width: 40%;"><h6>Nama</h6></td>
                                        <td style="width: 5%"><h6>:</h6></td>
                                        <td><h6>Putri Dwi Rahayu</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Tempat, Tanggal Lahir</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>Brebes, 18 Mei 2000</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Prodi</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>Informatika</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Agama</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>Islam</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Alamat</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6 style="text-align:justify">Dukuh Kalirau, Desa Galuhtimur, Tonjong, Brebes, Jawa Tengah</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>No. HP</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>082325543216</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Email</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>dwiiputrirahayu20@gmail.com</h6></td>
                                    </tr>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn" style="background-color: #ddba8d" data-dismiss="modal">Tutup</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Pakar -->
        <div class="modal fade" id="modalPakar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Biodata Pakar</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <table style="width: 95%" align="center">
                  <tr>
                    <img src="/sispak/assets/image/pakar.jpeg" style="width: 200px;display:block;margin:auto" alt="Putri Dwi Rahayu.jpeg">
                    <br>
                  </tr>
                  <tr>
                                        <td style="width: 40%;"><h6>Nama</h6></td>
                                        <td style="width: 5%"><h6>:</h6></td>
                                        <td><h6>Aida Laksmi Haryani, SP.</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Tempat, Tanggal Lahir</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>Brebes, 12 Juli 1998</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Jenis Kelamin</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>Perempuan</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Agama</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>Islam</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Alamat</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6 style="text-align:justify">Dukuh Pagenjahan, Kecamatan Bumiayu, Kabupaten Brebes</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>No. HP</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>089674480376</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Email</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>aidalaksmiharyani@gmail.com</h6></td>
                                    </tr>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" style="background-color: #ddba8d" data-dismiss="modal">Tutup</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div>
          </div>
        </div>

        <!-- Modal dosbing -->
        <div class="modal fade" id="modalDosbing" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dosen Pembimbing</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <table style="width: 95%" align="center">
                <tr>
                                        <td style="width: 40%;"><h6>Dosen Pembimbing 1</h6></td>
                                        <td style="width: 5%"><h6>:</h6></td>
                                        <td><h6>Budi Arif Dermawan, M.Kom.</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Dosen Pembimbing 2</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6>Betha Nurina Sari, M.Kom.</h6></td>
                                    </tr>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" style="background-color: #ddba8d" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>