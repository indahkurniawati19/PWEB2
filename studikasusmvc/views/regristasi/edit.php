<?php
require '../../index.php';
?>

  <body>
  <section id="kategori" class="hero d-flex align-items-center section-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
    <div class="px-4 py-8">
<h3 class="py-3">Edit Data Regristrasi</h3>
<?php
include_once '../../config.php';
include_once '../../controllers/RegristrasiController.php';
$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $regristasiController = new RegristasiController($db);
    $regristasiData= $regristasiController->getRegristasiById($id);

    if ($regristasiData){
        if (isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $level = $_POST['level'];

            $result = $regristasiController->updateRegristasi($id,$nama,$alamat,$username,$password,$level);

            if ($result){
                header("location:regristasi");
            }else {
                header("location:editRegristasi");
            }
        }
    }else{
        echo "Data tidak ditemukan";
    }
}
?>

<form action="" method="post">
<?php 
if($regristasiData){
?>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" value="<?php echo $regristasiData['nama'] ?> "name="nama" >
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control"   value="<?php echo $regristasiData['alamat'] ?> "name="alamat" >
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Username</label>
    <input type="text" class="form-control"  value="<?php echo $regristasiData['username'] ?> "name="username" >
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Password</label>
    <input type="text" class="form-control" value="<?php echo $regristasiData['password'] ?> "name="password" >
  </div>
  <div class="mb-3">
    <label for="level" class="form-label">Level</label>
    <select name= "level" class="form-control">
    <option value="pemilik" <?php if ($regristasiData['level'] === 'pemilik') echo 'selected'; ?>>Pemilik</option>
    <option value="admin" <?php if ($regristasiData['level'] === 'admin') echo 'selected'; ?>>Admin</option>
    <option value="pelanggan" <?php if ($regristasiData['level'] === 'pelanggan') echo 'selected'; ?>>Pelanggan</option>
    <option value="kurir" <?php if ($regristasiData['level'] === 'kurir') echo 'selected'; ?>>Kurir</option>
</select>
</div>
<div>      
    <input type="submit" name="submit" value="Simpan" class="btn btn-success"></button>  
</div>
<?php
}
?>
</form>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html> 
