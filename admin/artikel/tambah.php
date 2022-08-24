<?php $page = 'artikel' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tambah Artikel | Admin</title>
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
            <h1>Tambah Artikel</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="show.php">Artikel</a></div>
              <div class="breadcrumb-item">Tambah Artikel</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <form action="../master_file/sql.php?act=tambahArtikel" method="POST" enctype="multipart/form-data">
                        <br>
                        <div class="form-group">
                          <label for="judul">Judul</label>
                          <input type="text" name="judul" id="judul" class="form-control" required>
                          <input type="text" name="id_admin" id="id_admin" value="<?php echo $id; ?>" hidden>
                        </div>
                        <div class="form-group">
                          <label for="ringkasan">Ringkasan</label>
                          <textarea name="ringkasan" cols="50" rows="50" class="form-control"></textarea>
                          <label class="text-muted">* Buat ringkasan mengenai artikel yang ditulis, buat kurang dari 50 karakter</label>
                        </div>
                        <div class="form-group">
                          <label for="isi">Isi</label>
                          <textarea name="isi" id="isi" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <label>Gambar</label>
                          <input type="file" class="dropify" name="gambar" required>
                          <label>*Tipe gambar hanya jpg, jpeg, gif dan png</label>
                        </div>
                        <br>
                        <div class="form-group" style="float: right;">
                          <button type="reset" class="btn btn-danger">Bersihkan</button>
                          <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                      </form>
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
      height: 400,
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

    window.onload = function() {

      <?php if (isset($_SESSION['err'])) : ?>
        swal({
          title: "Error!",
          text: "<?= $_SESSION['err'] ?? "Terjadi kesalahan saat menyimpan data!" ?>",
          icon: "error",
        });
      <?php
        unset($_SESSION['err']);
      endif; ?>
    }
  </script>
</body>

</html>