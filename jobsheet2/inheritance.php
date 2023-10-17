<?php 

class 
manusia {
    private $nama_saya;

public function Panggil_nama($saya){
   return $this->nama_saya=$saya;  
}

}

//membuaat class turunan atau yang disebut dengan sub class dari class manusia
class mahasiswa extends manusia{

    protected $nama_mahasiswa;

    protected function nama_mahasiswa(){
        return "Nama saya " .$this->nama;
    }

    function panggil_mahasiswa($mahasiswa){
      return  $this->nama_mahasiswa=$mahasiswa;
    }

}

//instasiansi class mahasiswa
$informatika=new mahasiswa();

$informatika->panggil_nama("Indah");
$informatika->panggil_mahasiswa("Kurniawati Salongan");

//tampilkan isi dari properti
echo "Nama Depan Saya : " . $informatika->panggil_nama("Indah")."</br>";
echo "Nama Belakan Saya : " . $informatika->panggil_mahasiswa("Kurniawati Salongan") ."</br>";
?>