<?php 

class Kategori {
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllKategori(){
        $query ="SELECT * FROM kategori";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createKategori($nama_barang,$harga_barang){
       $query="INSERT INTO kategori(nama_barang,harga_barang)
       VALUES('$nama_barang','$harga_barang')";
       $result=mysqli_query($this->koneksi,$query);
       if($result){
        return true;
       }else{
        return false;
       }
    }

    public function getKategoriById($id_kategori){
        $query="SELECT * FROM kategori where id_kategori=$id_kategori";
        $result=mysqli_query($this->koneksi,$query);
        return mysqli_fetch_assoc($result);
    }

    public function updateKategori($id_kategori,$nama_barang,$harga_barang){
        $query="UPDATE kategori set nama_barang='$nama_barang',harga_barang='$harga_barang' where id_kategori='$id_kategori'";  
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
        }
    public function deleteKategori($id_kategori){
        $query="DELETE FROM kategori WHERE id_kategori=$id_kategori";
        $result= mysqli_query($this->koneksi, $query);

        if ($result){
            return true;
        }else {
            return false;
        }
    }

    
}

?>