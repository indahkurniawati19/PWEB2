<?php 

class manusia {
    public $nama_saya;

function Panggil_nama($saya){
   $this->nama_saya=$saya;  
}

}

//membuaat class turunan atau yang disebut dengan sub class dari class manusia
class mahasiswa extends manusia{

    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa=$mahasiswa;
    }

}

//instasiansi class mahasiswa
$informatika=new mahasiswa();

$informatika->panggil_nama("Indah");
$informatika->panggil_mahasiswa("Kurniawati Salongan");

//tampilkan isi dari properti
echo "Nama Depan Saya : " . $informatika->nama_saya."</br>";
echo "Nama Belakan Saya : " . $informatika->nama_mahasiswa."</br>";
?>