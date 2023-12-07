<?php 

include_once '../../config.php';
include_once '../../controllers/KategoriController.php';

$database=new database();
$db=$database->getKoneksi();


if(isset($_POST['submit'])){
    $nama_barang=$_POST['nama_barang'];
    $harga_barang=$_POST['harga_barang'];
    $foto=$_POST['foto'];

    $kategoriController = new KategoriController($db);
    $result=$kategoriController-> createKategori($nama_barang,$harga_barang,$foto);

    if ($result){
        header("location:kategori");
    }else{
        header("location:tambah.php");
    }
}

?>