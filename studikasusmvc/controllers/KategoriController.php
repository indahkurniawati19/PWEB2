<?php
include_once '../../models/Kategori.php';

class KategoriController{
    private $model;

    public function __construct($db){
        $this->model = new Kategori($db);
    }

    public function getAllKategori(){
        return $this->model->getAllKategori();
    }
    public function createKategori($nama_barang,$harga_barang,$foto){
    return $this->model->createKategori($nama_barang,$harga_barang,$foto);
}

public function getKategoriById($id_kategori){
    return $this->model->getKategoriById($id_kategori);
}
public function  updateKategori($id_kategori,$nama_barang,$harga_barang,$foto){
    return $this->model-> updateKategori($id_kategori,$nama_barang,$harga_barang,$foto);
}
public function deleteKategori($id_kategori){
    return $this->model->deleteKategori($id_kategori);
}

}
?>