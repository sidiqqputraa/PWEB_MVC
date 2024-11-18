<?php

class ProgramStudyControler{
    public function getAllProgramStudy(){
        require_once "Model/ProgramStudyModel.php";
        $model = new ProgramStudyModel();
        $data = $model->getAllProgramStudy();
        require_once "view/ProgramStudyView.php";
    }
}