<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

<?php
session_start();

if ($_SESSION['status'] != "login") {
    echo "<script>alert('Silakan masuk ke akun terlebih dahulu untuk mengakses halaman ini!'); window.location=('/sispak/login.php');</script>";
}

$name = $_SESSION["nama"];
$id = $_SESSION['id'];
$jabatan = $_SESSION['jabatan'];
?>
<!-- General CSS Files -->
<link rel="stylesheet" href="/sispak/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- Template CSS -->
<link rel="stylesheet" href="/sispak/assets/admin/css/style.css">
<link rel="stylesheet" href="/sispak/assets/admin/css/components.css">
<link rel="stylesheet" href="/sispak/assets/admin/css/dataTables.bootstrap4.min.css">

<link rel="icon" type="image/png" href="/sispak/assets/gambar/logo.png">