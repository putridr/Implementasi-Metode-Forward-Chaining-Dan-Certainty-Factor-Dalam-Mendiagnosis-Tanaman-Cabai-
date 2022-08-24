<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sispak | Tanaman Cabai</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <style>
    .nav-link:hover {
      background-color: #a5becc;
    }

    .banner-image {
      background-image: url('assets/gambar/lg.png');
      background-size: cover;
    }

    .border {
      margin: 0 auto;
      width: 160px;
      height: 50px;
      text-align: center;
      line-height: 50px;
    }

    .border:hover {
      background-color: #a5becc;
    }
  </style>

</head>

<body>
  <!--header-->
  <div>
    <nav class="navbar fixed-top navbar-expand-lg p-md-4">
      <div class="container">
        <a class="navbar-brand fw-bold text-white" href="#">OUR SISPAK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav fw-bold fs-5" style="font-family: Cochin">
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="konsultasi.php">Konsultasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="about.php">Tentang Kami</a>
            </li>
            <?php
            if (!isset($_SESSION)) {
              session_start();
            }

            if (!isset($_SESSION['status'])) {
            ?>
              <li class="nav-item">
                <a class="nav-link text-white <?php if ($page == 'login') {
                                                echo 'active';
                                              } ?>" href="/sispak/login.php">Admin</a>
              </li>
            <?php
            } else {
            ?>
              <li class="nav-item">
                <a class="nav-link text-white" href="/sispak/admin/index.php">Menu Admin</a>
              </li>

              <li class="nav-item">
              <a class="nav-link text-white" href="/sispak/logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')">Keluar</a>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
    </nav>
  </div>
  <!-- End Header -->

  <!-- Banner Image  -->
  <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
      <h2 class="text-Black fw-bold" style="font-family: Cambria">
        SELAMAT DATANG<br />
        DI<br />
        SISTEM PAKAR MENDIAGNOSA HAMA & PENYAKIT TANAMAN CABAI
      </h2>
      <br></br>
      <div class="border rounded-pill" style="border-color: #a5becc">
        <a href="konsultasi.php" class="text-decoration-none text-white fw-bold" btn="btn btn-success" style="background-color: CA955C">KONSULTASI!</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>