<?php
include_once '../../models/Mahasiswa.php';

class MahasiswaController{
    private $model;

    public function __construct($db){
        $this->model= new Mahasiswa($db);
    }

    public function getAllMahasiswa(){
        return $this->model->getAllMahasiswa();
    }

    public function createMahasiswa($nim,$nama,$alamat,$tempat_lahir,$jenis_kelamin,$agama){
        return $this->model->createMahasiswa($nim,$nama,$alamat,$tempat_lahir,$jenis_kelamin,$agama);
    }
    public function getMahasiswaById($id){
        return $this->model->getMahasiswaById($id);
    }
    public function updateMahasiswa($id,$nim,$nama,$alamat,$tempat_lahir,$jenis_kelamin,$agama){
        return $this->model->updateMahasiswa($id,$nim,$nama,$alamat,$tempat_lahir,$jenis_kelamin,$agama);
    }
    public function deleteMahasiswa($id){
        return $this->model->deleteMahasiswa($id);
    }
}
?>