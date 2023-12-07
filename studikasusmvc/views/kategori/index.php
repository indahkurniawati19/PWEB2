<?php 
//Memanggil Class model data base
include_once '../../config.php';
include_once '../../controllers/KategoriController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

//Memanggil Controller
$kategoriController = new KategoriController($db);
$kategori = $kategoriController->getAllKategori();
?>

<section id="kategori" class="hero d-flex align-items-center section-bg">
  <div class="container mb-0 mt-0" >
      <div class="col-md-12">
        <?php 
        error_reporting(E_ERROR | E_PARSE);

        if ($_GET['succes'] === "tambah") {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Mahasiswa Berhasil Di Tambahkan!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } elseif ($_GET['succes'] === "update") {
          echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Data Mahasiswa Berhasil Di Edit!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } elseif ($_GET['succes'] === "hapus") {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Mahasiswa Berhasil Di hapus!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
        <h3>Data Kategori</h3>
        <a href="tambahKategori" class="btn btn-primary mb-3 mt-2">Tambah Kategori</a>
        <table class="table table-striped">
          <tr>
            <th>No</th>
            <th>Nama barang</th>
            <th>Harga barang</th>
            <th>Foto</th>
            <th>Aksi</th>
          </tr>
          <?php
          $no = 1;
          foreach ($kategori as $x) {
          ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $x['nama_barang'] ?></td>
              <td><?php echo $x['harga_barang'] ?></td>
              <td>
                <img src="foto-kategori/<?php echo $x['foto']; ?>" alt="Foto Barang" width="100">
              </td>
              <td>
                <a href="editKategori?id_kategori=<?php echo $x['id_kategori']; ?>" class="btn btn-outline-warning">Edit</a>
                <a href="hapusKategori?id_kategori=<?php echo $x['id_kategori']; ?>" onclick="return confirm('Apakah yakin akan menghapus..?')" class="btn btn-outline-danger">Hapus</a>
              </td>
            </tr>
          <?php
          }
          ?>
        </table>
      </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>