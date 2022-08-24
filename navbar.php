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
      background-color: #ddba8d;
    }

    .navbar {
      background-color: #9e8b72;
    }
  </style>
</head>

</html>

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
              <a class="nav-link text-white" href="/sispak/logout.php">Keluar</a>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>