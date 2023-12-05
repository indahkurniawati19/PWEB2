<?php

include_once '../../config.php';
include_once '../../controllers/RegristrasiController.php';
require '../../index.php';
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
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regristasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <div class="px-4 py-8">
<h3 class="py-3">Edit Data Regristasi</h3>
<form action="" method="post">
    <?php
    foreach ($regristasiData as $d => $value){
        ?>
        <table border="0">
            <tr>
                <td width="100">
                    <?php
                    echo $d;
                    ?>
                </td>
                <td>
                    <input type="text" name="<?php echo $d ?>" value="<?php echo $value ?>">
                </td>
            </tr>
            <?php
    }
    ?>
        <tr>
            <td></td >
            <td><input type="submit" name="submit" value="Simpan" class="btn btn-success"></button></td >
        </tr>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html> 
