<?php
require '../../index.php';
?>
<html>
  <body>
    <section id="kategori" class="hero d-flex align-items-center section-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="px-4 py-8">
              <h3 class="py-3">Edit Data Kategori</h3>
              <?php
              include_once '../../config.php';
              include_once '../../controllers/KategoriController.php';

              $database = new database;
              $db = $database->getKoneksi();

              if (isset($_GET['id_kategori'])) {
                $id_kategori = $_GET['id_kategori'];

                $kategoriController = new KategoriController($db);
                $kategoriData = $kategoriController->getKategoriById($id_kategori);

                if ($kategoriData) {
                  if (isset($_POST['submit'])) {
                    $nama_barang = $_POST['nama_barang'];
                    $harga_barang = $_POST['harga_barang'];
                    $foto = $_FILES['foto']['name'];

                    // Proses unggah file dan penyimpanan di sini (belum diimplementasikan)

                    $result = $kategoriController->updateKategori($id_kategori, $nama_barang, $harga_barang, $foto);

                    if ($result) {
                      header("location:kategori");
                    } else {
                      header("location:editKategori");
                    }
                  }
                } else {
                  echo "Produk tidak ditemukan";
                }
              }
              ?>

              <form action="" method="post" enctype="multipart/form-data">
                <?php if ($kategoriData) : ?>
                  <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" value="<?php echo $kategoriData['nama_barang'] ?>">
                  </div>
                  <div class="mb-3">
                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input type="number" class="form-control" name="harga_barang" value="<?php echo $kategoriData['harga_barang'] ?>">
                  </div>
                  <div class="mb-3">
                    <label for="foto" class="form-label">Foto Barang</label>
                    <input type="file" class="form-control" name="foto">
                  </div>

                  <div class="mb-3">
                    <button name="submit" class="btn btn-primary">Simpan</button>
                  </div>
                <?php endif; ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>