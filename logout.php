<?php
// mengaktifkan session
session_start();

// menghapus semua session
session_destroy();

// mengalihkan halaman login
echo "<script>alert('Anda berhasil keluar !'); window.location=('index.php');</script>";
