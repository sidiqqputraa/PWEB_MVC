<?php

    class Database{
        public $koneksi;

        public function __construct() {
            $this->koneksi = mysqli_connect("localhost", "root", "", "akademik");
        }
    }
    class ProgramStudyModel extends Database{
        public function getAllProgramStudy() {
            $query = "SELECT * FROM program_study";
            return mysqli_query($this->koneksi, $query);
        }
    }

?>