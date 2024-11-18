<?php

require_once "controler/MahasiswaControler.php";
require_once "controler/ProgramStudyControler.php";

$sidiq = new MahasiswaControler();
$program_study = new ProgramStudyControler();

if(!$_GET){
    $sidiq->index();
}else if(isset($_GET['id'])){
    $sidiq->show($_GET['id']);
}else if($_GET['  ']){
    $program_study->getAllProgramStudy();
}
