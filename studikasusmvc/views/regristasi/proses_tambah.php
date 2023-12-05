<?php 

include_once '../../config.php';
include_once '../../controllers/RegristrasiController.php';

$database=new database();
$db=$database->getKoneksi();


if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];

    $regristasiController = new RegristasiController($db);
    $result=$regristasiController->createRegristasi($nama,$alamat,$username,$password,$level);

    if ($result){
        header("location:regristasi");
    }else{
        header("location:tambah.php");
    }
}

?>