<?php 
//membuat class
class mahasiswa {
//menulis property
var $nim;
var $nama;
var $alamat;    
var $kelas;

function __construct()
{
    echo"Saya Mahasiswa Teknik Informatika";
    echo"<br>";

}

function __destruct()
{
    echo"Politeknik Negeri Cilacap";
   
}

//method untuk menampilkan nama
function tampil_nama(){
return "Nama saya adalah Indah </br>";
}

function tampil_mahasiswa(){
    return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah <br>";
}

function tampil_kelas(){
    return "TI-2D";
}
//method untuk menampilkan nama
function tampil_alamat(){

}
}  

//membuat objek nama_mahasiswa
$nama_mahasiswa=new mahasiswa();
$nama_kelas=new mahasiswa();

//menampilkan objek ke layar
echo  $nama_mahasiswa->tampil_nama()."</br>";
echo  $nama_mahasiswa->tampil_mahasiswa()."</br>";
echo  $nama_kelas->tampil_kelas()."</br>";


?>