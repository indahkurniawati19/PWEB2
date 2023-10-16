<?php
//membuat class mahasiswa

use mahasiswa as GlobalMahasiswa;

class mahasiswa 
{

//property public
public $nama;
private $nim="220102085";

//public method
public function tampilkan_nama(){
    //nilai kembalian
    return "Nama Saya Indah Kurniawati S</br>";
}

//membuat protected methode
 function tampilkan_nim(){
        return"Nim saya ".$this->nim;
    }
}
//membuat atau instansiasi objek mahasiswa kedalam variable $mahasiswa
$mahasiswa= new mahasiswa();
$nim=new mahasiswa();
//memanggil method tampilkan_nama
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim() ;
?>