<?php 
//membuat class
class mahasiswa {
//menulis property
var $nim;
var $nama;
var $alamat;    


//method untuk menampilkan nama
function tampil_nama(){
return "Nama saya adalah Indah";
}

//method untuk menampilkan nama
function tampil_alamat(){

}
}  

//membuat objek nama_mahasiswa
$nama_mahasiswa=new mahasiswa();


//menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama()."</br>";


?>

<?php
//membuat class dosen
class dosen {
    //menulis property
    var $nidn;
    var $nama;
    var $prodi; 

    //method untuk menampilkan nama
    function tampil_nidn_dosen(){
        return"NIDN Saya adalah 220102085";

    }
    //method untuk menampilkan nama
    function tampil_nama_dosen(){
        return"Nama Saya adalah Indah Kurniawati S";
    }
    //method untuk menampilkan nama
    function tampil_prodi_dosen(){
        return"Prodi Saya adalah Teknik Informatika";
    }
 }

 //membuat objek nidn dosen
$nidn_dosen=new dosen();
 //membuat objek nama dosen
$nama_dosen=new dosen();
 //membuat objek prodi dosen
$prodi_dosen=new dosen();

//menampilkan objek ke layar
echo"<br> Dosen: ";
echo "</br>". $nidn_dosen->tampil_nidn_dosen() ;
echo "</br>". $nama_dosen->tampil_nama_dosen();
echo "</br>".$prodi_dosen->tampil_prodi_dosen();


?>