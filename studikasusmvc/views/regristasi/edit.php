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
<html lang="en">

<form action="" method="post">
    <?php
    foreach ($regristasiData as $d => $value){
        ?>
        <div class="mb-3">
    <label for="<?php echo $d ?>" class="form-label"><?php echo $d ?></label>
    <input type="text" class="form-control" name="<?php echo $d ?>" value="<?php echo $value ?>">
  </div>
            <?php
    }
    ?>
            <input type="submit" name="submit" value="Simpan" class="btn btn-success"></button>
        
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html> 
