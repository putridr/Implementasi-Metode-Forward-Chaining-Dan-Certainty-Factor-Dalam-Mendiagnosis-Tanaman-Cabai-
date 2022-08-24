<?php
include('../../config.php');

//query Anggota Admin
if ($_GET['act'] == 'tambahAnggota') {
    session_start();
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $password = md5($pass);
    $jabatan = '2';
    $status = '1';

    //query tambah
    $querytambah =  mysqli_query($koneksi, "INSERT INTO admin VALUES(NULL, '$nama' , '$username' , '$password', '$jabatan', '$status')");

    if ($querytambah) {
        $_SESSION['msg'] = 'Data berhasil disimpan !';
        header("Location:/sispak/admin/anggota/show.php");
    } else {
        $_SESSION['err'] = 'Terjadi kesalahan saat menyimpan data !';
        echo "<script>window.location='/sispak/admin/anggota/show.php';</script>";
    }
} elseif ($_GET['act'] == 'ubahAnggota') {
    session_start();
    $id_admin   = $_POST['id_admin'];
    $nama       = $_POST['nama'];
    $username   = $_POST['username'];
    $status     = $_POST['status'];

    //query update
    $queryupdate = mysqli_query($koneksi, "UPDATE admin SET nama='$nama', username='$username' , status='$status' WHERE id_admin='$id_admin' ");

    if ($queryupdate) {
        $_SESSION['msg'] = 'Data berhasil diubah !';
        header("Location:/sispak/admin/anggota/show.php");
    } else {
        $_SESSION['err'] = 'Terjadi kesalahan saat mengubah data !';
        echo "<script>window.location='/sispak/admin/anggota/show.php';</script>";
    }
} elseif ($_GET['act'] == 'hapusAnggota') {
    session_start();
    $id_admin = $_GET['id'];
    //query hapus
    $querydelete = mysqli_query($koneksi, "DELETE FROM admin WHERE id_admin = '$id_admin'");

    if ($querydelete) {
        $_SESSION['msg'] = 'Data berhasil dihapus !';
        header("Location:/sispak/admin/anggota/show.php");
    } else {
        $_SESSION['err'] = 'Terjadi kesalahan saat menghapus data !';
        echo "<script>window.location='/sispak/admin/anggota/show.php';</script>";
    }

    mysqli_close($koneksi);
} elseif ($_GET['act'] == 'profil') {
    session_start();
    $id_admin = $_POST['id_admin'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $password = md5($pass);

    //query update
    $queryupdate = mysqli_query($koneksi, "UPDATE admin SET nama='$nama', username='$username' , password='$password' WHERE id_admin='$id_admin' ");

    if ($queryupdate) {
        $_SESSION['msg'] = 'Profil berhasil diubah !';
        header("Location:/sispak/admin/anggota/profil.php");
    } else {
        $_SESSION['err'] = 'Terjadi kesalahan saat mengubah profil !';
        echo "<script>window.location='/sispak/admin/anggota/profil.php';</script>";
    }

    //query Jenis Hama/Penyakit
} elseif ($_GET['act'] == 'tambahStadium') {
    session_start();
    $stadium = $_POST['nama_penyakit'];
    $detail = $_POST['detail'];
    $saran = $_POST['saran'];

    $gambar_penyakit = $_FILES['gambar_penyakit']['name'];
    $tmp_name = $_FILES['gambar_penyakit']['tmp_name'];
    $gambar_saran = $_FILES['gambar_saran']['name'];
    $tmp_name_saran = $_FILES['gambar_saran']['tmp_name'];
    
    move_uploaded_file($tmp_name, "foto/".$gambar_penyakit);
    move_uploaded_file($tmp_name_saran, "foto/".$gambar_saran);
    //query Tambah
    $querytambah =  mysqli_query($koneksi, "INSERT INTO jenis_penyakit VALUES(NULL, '$stadium' , '$detail' , '$saran', '$gambar_penyakit', '$gambar_saran')");

    if ($querytambah) {
        $_SESSION['msg'] = 'Data berhasil disimpan !';
        header("Location:/sispak/admin/jenis_penyakit/show.php");
    } else {
        $_SESSION['err'] = 'Terjadi kesalahan saat menyimpan data !';
        echo "<script>window.location='/sispak/admin/jenis_penyakit/show.php';</script>";
    }
} elseif ($_GET['act'] == 'ubahStadium') {
    session_start();
    $id_penyakit = $_POST['id_penyakit'];
    $stadium = $_POST['nama_penyakit'];
    $detail = $_POST['detail'];
    $saran = $_POST['saran'];

    $gambar_penyakit_new = $_FILES['gambar_penyakit']['name'];
    $tmp_name = $_FILES['gambar_penyakit']['tmp_name'];
    
    $gambar_saran_new = $_FILES['gambar_saran']['name'];
    $tmp_name_saran = $_FILES['gambar_saran']['tmp_name'];
    
    move_uploaded_file($tmp_name, "foto/".$gambar_penyakit_new);
    move_uploaded_file($tmp_name_saran, "foto/".$gambar_saran_new);

    //query update
    $queryupdate = mysqli_query($koneksi, "UPDATE jenis_penyakit SET nama_penyakit='$stadium', detail='$detail' , saran='$saran', gambar_penyakit='$gambar_penyakit', gambar_saran='$gambar_saran' WHERE id_penyakit='$id_penyakit' ");

    if ($queryupdate) {
        $_SESSION['msg'] = 'Data berhasil diubah !';
        header("Location:/sispak/admin/jenis_penyakit/show.php");
    } else {
        $_SESSION['err'] = 'Terjadi kesalahan saat mengubah data !';
        echo "<script>window.location='/sispak/admin/jenis_penyakit/show.php';</script>";
    }
} elseif ($_GET['act'] == 'hapusStadium') {
    session_start();
    $id_penyakit = $_GET['id'];
    //query hapus
    $querydelete = mysqli_query($koneksi, "DELETE FROM jenis_penyakit WHERE id_penyakit = '$id_penyakit'");
    if ($querydelete) {
        $_SESSION['msg'] = 'Data berhasil dihapus !';
        header("Location:/sispak/admin/jenis_penyakit/show.php");
    } else {
        $_SESSION['err'] = 'Terjadi kesalahan saat menghapus data !';
        echo "<script>window.location='/sispak/admin/jenis_penyakit/show.php';</script>";
    }

    mysqli_close($koneksi);
   
    //query Gejala
} elseif ($_GET['act'] == 'tambahGejala') {
    session_start();
    $gejala = $_POST['gejala'];
    $gambar_gejala = $_FILES['gambar_gejala']['name'];
    $tmp_name = $_FILES['gambar_gejala']['tmp_name'];
    
    move_uploaded_file($tmp_name, "foto/".$gambar_gejala);

    // //query Tambah
    $querytambah =  mysqli_query($koneksi, "INSERT INTO gejala VALUES(NULL, '$gejala', '$gambar_gejala')");

    if ($querytambah) {
        $_SESSION['msg'] = 'Data berhasil disimpan !';
        header("Location:/sispak/admin/gejala/show.php");
    } else {
        $_SESSION['err'] = 'Terjadi kesalahan saat menyimpan data !';
        echo "<script>window.location='/sispak/admin/gejala/tambah.php';</script>";
    }
} elseif ($_GET['act'] == 'ubahGejala') {
    session_start();
    $id_gejala = $_POST['id_gejala'];
    $gejala = $_POST['gejala'];

    $gambar_gejala = $_FILES['gambar_gejala']['name'];
    $tmp_name = $_FILES['gambar_gejala']['tmp_name'];
    
    move_uploaded_file($tmp_name, "foto/".$gambar_gejala);
    
    //query update
    $queryupdate = mysqli_query($koneksi, "UPDATE gejala SET gejala='$gejala', gambar_gejala='$gambar_gejala' WHERE id_gejala='$id_gejala'");

    if ($queryupdate) {
        $_SESSION['msg'] = 'Data berhasil diubah !';
        header("Location:/sispak/admin/gejala/show.php");
    } else {
        $_SESSION['err'] = 'Terjadi kesalahan saat mengubah data !';
        echo "<script>window.location='/sispak/admin/gejala/show.php';</script>";
    }
} elseif ($_GET['act'] == 'hapusGejala') {
    session_start();
    $id_gejala = $_GET['id'];

    //query hapus
    $querydelete = mysqli_query($koneksi, "DELETE FROM gejala WHERE id_gejala = '$id_gejala'");

    if ($querydelete) {
        $_SESSION['msg'] = 'Data berhasil dihapus !';
        header("Location:/sispak/admin/gejala/show.php");
    } else {
        $_SESSION['err'] = 'Terjadi kesalahan saat menghapus data !';
        echo "<script>window.location='/sispak/admin/gejala/show.php';</script>";
    }

    mysqli_close($koneksi);
    
    //Basis Pengetahuan
} elseif ($_GET['act'] == 'tambahPengetahuan') {
    session_start();
    $id_penyakit = $_POST['stadium'];
    $id_gejala = $_POST['gejala'];
    $cf = $_POST['nilai_cf'];
    
    //query Tambah
    $querytambah =  mysqli_query($koneksi, "INSERT INTO basis_pengetahuan VALUES(NULL, '$id_penyakit' , '$id_gejala' , '$cf')");

    if ($querytambah) {
        $_SESSION['msg'] = 'Data berhasil disimpan !';
        header("Location:/sispak/admin/basis_pengetahuan/show.php");
    } else {
        $_SESSION['err'] = 'Terjadi kesalahan saat menyimpan data !';
        echo "<script>window.location='/sispak/admin/basis_pengetahuan/show.php';</script>";
    }
} elseif ($_GET['act'] == 'ubahPengetahuan') {
    session_start();
    $id_pengetahuan = $_POST['id_pengetahuan'];
    $id_penyakit    = $_POST['stadium'];
    $id_gejala      = $_POST['gejala'];
    $cf             = $_POST['nilai_cf'];

    //query update
    $queryupdate = mysqli_query($koneksi, "UPDATE basis_pengetahuan SET id_penyakit='$id_penyakit', id_gejala='$id_gejala' , nilai_cf='$cf' WHERE id_pengetahuan='$id_pengetahuan' ");

    if ($queryupdate) {
        $_SESSION['msg'] = 'Data berhasil diubah !';
        header("Location:/sispak/admin/basis_pengetahuan/show.php");
    } else {
        $_SESSION['err'] = 'Terjadi kesalahan saat mengubah data !';
        echo "<script>window.location='/sispak/admin/basis_pengetahuan/show.php';</script>";
    }
} elseif ($_GET['act'] == 'hapusPengetahuan') {
    session_start();
    $id_pengetahuan = $_GET['id'];

    //query hapus
    $querydelete = mysqli_query($koneksi, "DELETE FROM basis_pengetahuan WHERE id_pengetahuan = '$id_pengetahuan'");

    if ($querydelete) {
        $_SESSION['msg'] = 'Data berhasil dihapus !';
        header("Location:/sispak/admin/basis_pengetahuan/show.php");
    } else {
        $_SESSION['err'] = 'Terjadi kesalahan saat menghapus data !';
        echo "<script>window.location='/sispak/admin/basis_pengetahuan/show.php';</script>";
    }

    mysqli_close($koneksi);
}
