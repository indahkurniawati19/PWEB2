
<?php 
//Memanggil Class model data base
include_once '../../config.php';
include_once '../../controllers/RegristrasiController.php';
require '../../index.php';
//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

//Memanggil Controller
$regristasiController = new RegristasiController($db);
$regristasi= $regristasiController->getAllRegristasi();
?>


 
  
  <body>
  <section id="regristasi" class="hero d-flex align-items-center section-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
<div class="px-5 py-8">
  <?php 
error_reporting(E_ERROR | E_PARSE);

  if($_GET['succes']==="tambah"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Mahasiswa Berhasil Di Tambahkan!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }elseif($_GET['succes']==="update"){
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Data Mahasiswa Berhasil Di Edit!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }elseif($_GET['succes']==="hapus"){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Mahasiswa Berhasil Di hapus!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  ?>
<h3>Data Regristrasi</h3>
<a href="tambahRegristasi"class="btn btn-primary mb-3 mt-2">Tambah Regristrasi</a>
<table class="table table-striped">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Username</th>
    <th>Password</th>
    <th>Level</th>
    <th>Aksi</th>
   
</tr>
<?php
$no=1;
foreach($regristasi as $x){
    ?>

    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td><?php echo $x['username'] ?></td>
        <td><?php echo $x['password'] ?></td>
        <td><?php echo $x['level'] ?></td>
        <td>
            <a href="editRegristasi?id=<?php echo $x['id'];?>"class="btn btn-warning">Edit</a>
            <a href="hapusRegristasi?id=<?php echo $x['id'];?>" onclick = "return confirm 
            ('Apakah yakin akan menghapus..?')"class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    <?php
   
}  
?>
</div>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  </div>
</html>

