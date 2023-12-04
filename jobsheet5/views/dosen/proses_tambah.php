<?php 

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database=new database();
$db=$database->getKoneksi();


if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $nidn=$_POST['nidn'];
    $alamat=$_POST['alamat'];
 
    $dosenController = new DosenController($db);
    $result=$dosenController->createDosen($nama,$nidn,$alamat);

    if ($result){
        header("location:dosen");
    }else{
        header("location:tambah.php");
    }
}

?>