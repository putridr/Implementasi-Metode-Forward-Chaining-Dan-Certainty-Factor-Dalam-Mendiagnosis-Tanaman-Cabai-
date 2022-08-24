<?php
$page = 'riwayat';
include('../../config.php');
$id_hasil = $_GET['id'];

// Memanggil kondisi dari db
$sqlkondisi         = mysqli_query($koneksi, "SELECT * FROM kondisi order by id_kondisi+0");
while ($row_kondisi = mysqli_fetch_array($sqlkondisi)) {
    $array_kondisitext[$row_kondisi['id_kondisi']] = $row_kondisi['kondisi'];
}

// Memanggil jenis penyakit
$sqlpkt = mysqli_query($koneksi, "SELECT * FROM jenis_penyakit order by id_penyakit+0");
while ($row_penyakit = mysqli_fetch_array($sqlpkt)) {
    $nama_penyakit[$row_penyakit['id_penyakit']] = $row_penyakit['nama_penyakit'];
    $detail_penyakit[$row_penyakit['id_penyakit']] = $row_penyakit['detail'];
    $saran_penyakit[$row_penyakit['id_penyakit']] = $row_penyakit['saran'];
}

$sql_id = mysqli_query($koneksi, "SELECT id_konsultasi FROM hasil_konsultasi where id_hasil=$id_hasil");
while ($row_id_konsul = mysqli_fetch_array($sql_id)) {
    $id_konsultasi = $row_id_konsul['id_konsultasi'];
}

$sqlhasil = mysqli_query($koneksi, "SELECT * FROM konsultasi where id_konsultasi=$id_konsultasi");
while ($rhasil = mysqli_fetch_array($sqlhasil)) {
    $array_penyakit = unserialize($rhasil['penyakit']);
    $array_gejala = unserialize($rhasil['gejala']);
}

// if (isset($_POST)) {
//     echo json_encode($argejala);
//     die;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail Hasil Konsultasi | Admin</title>
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
                            <h1>Detail Riwayat Konsultasi</h1>
                        </div>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        $query = "SELECT * FROM hasil_konsultasi INNER JOIN jenis_penyakit ON hasil_konsultasi.id_penyakit=jenis_penyakit.id_penyakit INNER JOIN pengguna ON hasil_konsultasi.id_pengguna = pengguna.id_pengguna WHERE id_hasil='$id_hasil'";
                                        $sql = mysqli_query($koneksi, $query);
                                        $no = 1;
                                        while ($row = mysqli_fetch_array($sql)) {
                                        ?>

                                            <h3 style="margin-left: 2%;">Biodata Pengguna</h3>
                                            <div class="table-responsive">
                                                <table class="table table-hover" width='100%'>
                                                    <tr>
                                                        <td width='15%'>Nama</td>
                                                        <td>: <?php echo $row['nama'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Umur</td>
                                                        <td>: <?php echo $row['umur'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin</td>
                                                        <td>:
                                                            <?php
                                                            if ($row['jk'] == 1) {
                                                                echo 'Laki-laki';
                                                            } else {
                                                                echo 'Perempuan';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>No. HP</td>
                                                        <td>: <?php echo $row['no_hp'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td>: <?php echo $row['alamat'] ?></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <div class="container">
                                                <h3>Gejala yang dialami</h3>
                                                <div class="table table-responsive">
                                                    <table class="table table-striped">
                                                        <thead class="text-center">
                                                            <th>No</th>
                                                            <th>Kode</th>
                                                            <th>Gejala yang dialami</th>
                                                            <th>Kondisi</th>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $ig = 0;
                                                            foreach ($array_gejala as $key => $value) {
                                                                $kondisi = $value;
                                                                $ig++;
                                                                $gejala = $key;
                                                                $query_gejala_hasil = mysqli_query($koneksi, "SELECT * FROM gejala where id_gejala = '$key'");
                                                                $r4 = mysqli_fetch_array($query_gejala_hasil);
                                                            ?>
                                                                <tr style="text-align: center;">
                                                                    <td><?php echo $ig ?></td>
                                                                    <td><?php echo 'G' . str_pad($r4['id_gejala'], 3, '0', STR_PAD_LEFT); ?></td>
                                                                    <td style="text-align: justify;"><?php echo $r4['gejala'] ?></td>
                                                                    <td><?php echo $array_kondisitext[$kondisi] ?></td>

                                                                </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="container">
                                                <h3>Hasil Diagnosa</h3>
                                                <div class="jumbotron jumbotron-fluid">
                                                    <?php
                                                    $np = 0;
                                                    foreach ($array_penyakit as $key => $value) {
                                                        $np++;
                                                        $idpkt[$np] = $key;
                                                        $nmpkt[$np] = $nama_penyakit[$key];
                                                        $vlpkt[$np] = $value;
                                                    }

                                                    ?>
                                                    <div class="container">
                                                        <p class="lead" style="text-align: justify;">Berdasarkan hasil pemeriksaan yang telah dilakukan, dapat disimpulkan bahwa pengguna</p>
                                                        <div style="padding-left: 3%;">
                                                            <?php
                                                            if ($nmpkt[1] != "Tidak Terkena Penyakit/Hama") {
                                                                echo "<p style='font-size: 40px;font-weight:500'> Terkena Hama/Penyakit $nmpkt[1] </p>";
                                                                $akurasi = $vlpkt[1] * 100;
                                                                echo "<h4>dengan tingkat akurasi sebesar $akurasi %</h4>";
                                                            } else {
                                                                echo "<p style='font-size: 40px;font-weight:500'> $nmpkt[1]</p>";
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
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