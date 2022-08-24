<?php
$host = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'sispak';

$koneksi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
if (!$koneksi) {
    die("Gagal Mengakses Database:" . mysqli_connect_error());
}
