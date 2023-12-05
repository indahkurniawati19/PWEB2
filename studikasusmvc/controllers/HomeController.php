<?php 

class HomeController{
    public function home(){
        header("location:http://localhost/PWEB2/studikasusmvc/index.php");
    }
    public function kategori(){
        header("location:http://localhost/PWEB2/studikasusmvc/views/kategori/index.php");
    }
    public function regristasi(){
        header("location:http://localhost/PWEB2/studikasusmvc/views/regristasi/index.php");
    }
}
 

?>