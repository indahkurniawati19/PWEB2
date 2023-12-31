<?php
require '../../index.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <div class="px-4 py-8">
<h3 class="py-3">Edit Data Kategori</h3>
<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/KategoriController.php';

//instansiasi class database
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

            $result = $kategoriController->updateKategori($id_kategori, $nama_barang, $harga_barang);

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

<form action="" method="post">
  <?php
  if ($kategoriData) {
      foreach ($kategoriData as $d => $value) {
  ?>
  <div class="mb-3">
    <label for="<?php echo $d ?>" class="form-label"><?php echo $d ?></label>
    <input type="text" class="form-control" name="<?php echo $d ?>" value="<?php echo $value ?>">
  </div>
  <?php
      }
  }
  ?>
  <input type="submit" name="submit" value="Simpan" class="btn btn-success">
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>