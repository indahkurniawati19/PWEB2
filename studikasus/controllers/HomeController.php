<?php 

class HomeController{
    public function home(){
        header("location:http://localhost/PWEB2/studikasus/index.php");
    }
    public function kategori(){
        header("location:http://localhost/PWEB2/studikasus/views/kategori/index.php");
    }
    public function regristasi(){
        header("location:http://localhost/PWEB2/studikasus/views/regristasi/index.php");
    }
}
 

?>