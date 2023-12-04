<?php 

class Mahasiswa {
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllMahasiswa(){
        $query="SELECT * FROM mahasiswa";
        $result=mysqli_query($this->koneksi,$query);
        return $result;
    }    

    public function createMahasiswa($nim,$nama,$alamat,$tempat_lahir,$jenis_kelamin,$agama){
        $query="INSERT INTO mahasiswa (nim,nama,alamat,tempat_lahir,jenis_kelamin,agama) 
        VALUES('$nim','$nama','$alamat','$tempat_lahir','$jenis_kelamin','$agama')";
         $result=mysqli_query($this->koneksi,$query);

    if ($result){
        return true;
    } else{
        return false;
    }
    }
    public function getMahasiswaById($id){
        $query="SELECT * FROM mahasiswa where id=$id";
        $result=mysqli_query($this->koneksi,$query);
        return mysqli_fetch_assoc($result);
    }

    public function updateMahasiswa($id,$nim,$nama,$alamat,$tempat_lahir,$jenis_kelamin,$agama){
        $query="UPDATE mahasiswa set nim='$nim',nama='$nama',alamat='$alamat',tempat_lahir='$tempat_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama' where id='$id'";  
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
        }
    public function deleteMahasiswa($id){
        $query="DELETE FROM mahasiswa WHERE id=$id";
        $result= mysqli_query($this->koneksi, $query);

        if ($result){
            return true;
        }else {
            return false;
        }
    }

}

?>