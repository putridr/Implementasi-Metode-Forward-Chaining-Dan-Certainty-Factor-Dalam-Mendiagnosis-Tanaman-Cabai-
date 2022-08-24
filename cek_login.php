<?php
session_start();

include "config.php"; //ambil koneksi ke db

$username = $_POST['username'];
$password = $_POST['password'];
$pass     = stripslashes($password);
$pass     = mysqli_real_escape_string($koneksi, $pass); //mencegah mysql injection
$pass     = md5($pass);

$sql      = "SELECT * FROM admin WHERE username = '$username' AND password='$pass'";
$login    = mysqli_query($koneksi, $sql);
$row      = mysqli_fetch_array($login);

if ($row['username'] == $username and $row['password'] == $pass and $row['status'] == 1) {
  session_start();
  $_SESSION['id'] = $row['id_admin'];
  $_SESSION['nama'] = $row['nama'];
  $_SESSION['status'] = "login";
  $_SESSION['jabatan'] = $row['jabatan'];
  header('location:/sispak/admin/index.php');
} elseif ($row['status'] == 2) {
  echo "<script>alert('Akun anda tidak aktif. Silakan Hubungi Admin !'); window.location=('/sispak/login.php');</script>";
} else { //jika levelnya bukan user atau admin maka akan muncul seperti dibawah
  echo "<script>alert('Username dan password anda salah!'); window.location=('/sispak/login.php');</script>";
}
?>''