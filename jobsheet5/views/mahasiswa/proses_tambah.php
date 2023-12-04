<?php 

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database=new database();
$db=$database->getKoneksi();


if(isset($_POST['submit'])){
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $agama=$_POST['agama'];

    $mahasiswaController=new MahasiswaController($db);
    $result=$mahasiswaController->createMahasiswa($nim,$nama,$alamat,$tempat_lahir,$jenis_kelamin,$agama);

    if ($result){
        header("location:mahasiswa");
    }else{
        header("location:tambah.php");
    }
}

?>