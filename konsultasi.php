<?php
$page = 'konsultasi';
include('config.php');
session_start();
?>

<html lang="en">

<head>
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
            margin-bottom: 7%;
            /* background-color: yellow; */
        }
    </style>
</head>

<body class="scroll">
    <?php include('navbar.php'); ?>
    <div class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 mb-3">
                <div class="card kartu" style="padding: 3%">
                    <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
                        <h4><i class='icon fa fa-exclamation-triangle'></i> Perhatian !</h4>
                        <p style="text-align: justify;">Silahkan memilih gejala sesuai dengan kondisi yang anda alami, anda dapat memilih tingkat kepastian kondisi mulai dari pasti tidak hingga pasti ya, jika sudah tekan tombol lihat hasil di bawah untuk mengetahui hasil diagnosa.</p>
                    </div>
                    <form action="hasil_konsul.php" method="POST">
                        <div class="table-responsive">
                            <table width='100%' class="table table-bordered table-striped" border="1">
                                <thead>
                                    <tr style="text-align:center">
                                        <th>No.</th>
                                        <th>Kode</th>
                                        <th>Gejala</th>
                                        <th>Gambar</th>
                                        <th>Kondisi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_get_gejala = mysqli_query($koneksi, "SELECT * FROM gejala order by id_gejala");
                                    $no = 0;
                                    while ($row_get_gejala = mysqli_fetch_array($sql_get_gejala)) {
                                        $no++;
                                    ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo "G" . str_pad($row_get_gejala['id_gejala'], 2, '0', STR_PAD_LEFT); ?></td>
                                            <td><?php echo $row_get_gejala['gejala'] ?></td>
                                            <td>
                                                <?php
                                                if ($row_get_gejala['gambar_gejala'] == "") { ?>
                                                    <img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO+SISWA" style="width:100px;height:100px;">
                                                <?php } else { ?>
                                                    <img src="admin/master_file/foto/<?php echo $row_get_gejala['gambar_gejala']; ?>" style="width:200px;height:200px;">
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <select name="kondisi[]" id="sl<?php echo $no; ?>">
                                                    <?php
                                                    $sql_get_kondisi = mysqli_query($koneksi, "SELECT * FROM kondisi order by id_kondisi");
                                                    while ($row_get_kondisi = mysqli_fetch_array($sql_get_kondisi)) {
                                                    ?>
                                                        <option data-id="<?php echo $row_get_kondisi['id_kondisi']; ?>" value="<?php echo $row_get_gejala['id_gejala'] . '_' . $row_get_kondisi['id_kondisi']; ?>"><?php echo $row_get_kondisi['kondisi']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <input style="float: right;" type="submit" class="btn btn-success" value="Lihat Hasil">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>