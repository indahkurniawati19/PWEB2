<?php

include_once '../../config.php';
include_once '../../controllers/KategoriController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_kategori'])){
    $id_kategori=$_GET['id_kategori'];

    $kategoriController = new KategoriController($db);
    $result=$kategoriController->deleteKategori($id_kategori);

    if ($result){
        header("location:kategori");
    }else {
        echo "Gagal menghapus data";
    }
}