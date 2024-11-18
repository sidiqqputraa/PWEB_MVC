<?php

class MahasiswaControler {
    public function Index(){
    require_once "Model/MahasiswaModel.php";
    $model = new MahasiswaModel();
    $data = $model->getAllMahasiswa();
    require_once "view/Mahasiswa.php";
    }

public function show(){
    require_once "Model/MahasiswaModel.php";
    $model = new MahasiswaModel();
    $id = $_GET['id'];
    $data = $model->getMahasiswaById($id);
    require_once "view/Mahasiswa_detail.php";
    }
}