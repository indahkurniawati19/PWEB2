<?php
include_once '../../models/Regristasi.php';

class RegristasiController{
    private $model;

    public function __construct($db){
        $this->model = new Regristasi($db);
    }

    public function getAllRegristasi(){
        return $this->model->getAllRegristasi();
    }
    public function createRegristasi($nama,$alamat,$username,$password,$level){
    return $this->model->createRegristasi($nama,$alamat,$username,$password,$level);
}

public function getRegristasiById($id){
    return $this->model->getRegristasiById($id);
}
public function updateRegristasi($id,$nama,$alamat,$username,$password,$level){
    return $this->model->updateRegristasi($id,$nama,$alamat,$username,$password,$level);
}
public function deleteRegristasi($id){
    return $this->model->deleteRegristasi($id);
}

}
?>