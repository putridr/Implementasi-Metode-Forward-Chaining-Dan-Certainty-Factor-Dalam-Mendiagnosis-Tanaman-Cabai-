<?php $page = 'artikel';
include('../../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ubah Artikel | Admin</title>
  <?php include('../master_file/head.php') ?>
  <link rel="stylesheet" href="../../../assets/admin/css/dropify.min.css">
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
            <h1>Ubah Artikel</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="show.php">Artikel</a></div>
              <div class="breadcrumb-item">Ubah Artikel</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <?php
                      $id_artikel = $_GET['id'];
                      $query = "SELECT * FROM artikel WHERE id_artikel = '$id_artikel'";
                      $sql = mysqli_query($koneksi, $query);
                      while ($row = mysqli_fetch_array($sql)) {
                      ?>
                        <form action="../master_file/sql.php?act=ubahArtikel" method="POST" enctype="multipart/form-data">
                          <br>
                          <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" id="judul" value="<?php echo $row['judul'] ?>" class="form-control" required>
                            <input type="text" name="id_admin" id="id_admin" value="<?php echo $id; ?>" hidden>
                            <input type="hidden" name="id_artikel" value="<?php echo $id_artikel ?>">
                          </div>
                          <div class="form-group">
                            <label for="ringkasan">Ringkasan</label>
                            <textarea name="ringkasan" cols="50" rows="50" class="form-control"><?php echo $row['ringkasan'] ?></textarea>
                            <label class="text-muted">* Buat ringkasan mengenai artikel yang ditulis, buat kurang dari 50 karakter</label>
                          </div>
                          <div class="form-group">
                            <label for="isi">Isi</label>
                            <textarea name="isi" id="isi" class="form-control" required><?php echo $row['isi'] ?></textarea>
                          </div>
                          <div class="form-group">
                            <label class="form-label">Status</label>
                            <div class="selectgroup w-100">
                              <label class="selectgroup-item">
                                <input type="radio" name="status" value="1" class="selectgroup-input" <?php if ($row['status'] == 1) { ?>checked="" <?php } ?>>
                                <span class="selectgroup-button">Terbit</span>
                              </label>
                              <label class="selectgroup-item">
                                <input type="radio" name="status" value="2" class="selectgroup-input" <?php if ($row['status'] == 2) { ?>checked="" <?php } ?>>
                                <span class="selectgroup-button">Belum Terbit</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="label" for="customFile">Gambar</label><br>
                            <?php
                            if ($row['gambar'] != NULL) {
                            ?>
                              <!-- <img src="../master_file/gambar/<?php echo $row['gambar'] ?>" alt="<?php echo $row['gambar'] ?>" style="width: 50%;margin: 10px;"> -->
                              <input type="file" class="dropify" name="gambar" data-default-file="../../../assets/gambar/<?php echo $row['gambar'] ?>">
                              <input type="hidden" name="gambar_lama" value="<?= $row['gambar'] ?>">
                              <label>*Abaikan jika tidak ingin mengubah gambar</label>
                            <?php
                            } else {
                            ?>
                              <input type="file" class="form-control" name="gambar" value="<?php echo $row['gambar'] ?>">
                              <label>*Tipe gambar hanya jpg,jpeg, dan png</label>
                            <?php } ?>
                          </div>
                          <br>
                          <div class="form-group" style="float: right;">
                            <button type="reset" class="btn btn-danger">Bersihkan</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                          </div>
                        </form>
                      <?php } ?>
                    </div>
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
  <script src="../../../assets/admin/js/tinymce.min.js"></script>
  <script src="../../../assets/admin/js/dropify.min.js"></script>
  <script>
    tinymce.init({
      selector: '#isi',
      height: 300,
      forced_root_block: "",
      force_br_newlines: true,
      force_p_newlines: false,
      plugins: [
        'autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
      ],
      toolbar1: 'undo redo | insert | styleselect table | bold italic | hr alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media ',
      toolbar2: 'print preview | forecolor backcolor emoticons | fontselect | fontsizeselect | codesample code fullscreen',
      templates: [{
          title: 'Test template 1',
          content: ''
        },
        {
          title: 'Test template 2',
          content: ''
        }
      ],
      content_css: [],
    });

    $('.dropify').dropify({
      messages: {
        'default': 'Tarik atau Letakan Gambar Disini',
        'replace': 'Tarik atau Letakan Gambar Disini Untuk Mengganti Gambar',
        'remove': 'Hapus',
        'error': 'Ooops, ERROR !!!'
      },
      error: {
        'fileSize': 'The file size is too big (4M max).'
      }
    });
  </script>
</body>

</html>