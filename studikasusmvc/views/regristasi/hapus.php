<?php

include_once '../../config.php';
include_once '../../controllers/RegristrasiController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])){
    $id=$_GET['id'];

    $regristasiController = new RegristasiController($db);
    $result= $regristasiController->deleteRegristasi($id);

    if ($result){
        header("location:regristasi");
    }else {
        echo "Gagal menghapus data";
    }
}