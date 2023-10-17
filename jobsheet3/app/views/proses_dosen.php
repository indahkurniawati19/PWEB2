<?php 
//memanggil class database
include '../classes/database.php';
//instansiasi class databases
$db=new database;

$aksi=$_GET['aksi'];
if ($aksi=="tambah"){
    $db->tambah_dosen($_POST['nidn'],$_POST['nama'],$_POST['alamat']);
    header("location:tampil_dosen.php");
}elseif($aksi=="update"){
    $db->update($_POST['id'], $_POST['nidn'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_dosen.php");
}
elseif($aksi=="hapus"){
    $db->hapus($_GET['id']); 
    header("location:tampil_dosen.php");
}
?>