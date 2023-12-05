<?php 

class Regristasi {
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllRegristasi(){
        $query ="SELECT * FROM regristasi";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createRegristasi($nama,$alamat,$username,$password,$level){
       $query="INSERT INTO regristasi(nama,alamat,username,password,level)
       VALUES('$nama','$alamat','$username','$password','$level')";
       $result=mysqli_query($this->koneksi,$query);
       if($result){
        return true;
       }else{
        return false;
       }
    }

    public function getRegristasiById($id){
        $query="SELECT * FROM regristasi where id=$id";
        $result=mysqli_query($this->koneksi,$query);
        return mysqli_fetch_assoc($result);
    }

    public function updateRegristasi($id,$nama,$alamat,$username,$password,$level){
        $query="UPDATE regristasi set nama='$nama',alamat='$alamat',username='$username',password='$password',level='$level' where id='$id'";  
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else{
            return false;
        }
        }
    public function deleteRegristasi($id){
        $query="DELETE FROM regristasi WHERE id=$id";
        $result= mysqli_query($this->koneksi, $query);

        if ($result){
            return true;
        }else {
            return false;
        }
    }

    
}

?>