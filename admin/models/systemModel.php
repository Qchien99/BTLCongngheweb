<?php
    require 'config/db.php';
    class systemModel extends Database {
        private $tblName,$tblNumRow;
        public function getName(){
            return $this->tblName;
        }
        public function getNumRow(){
            return $this->tblNumRow;
        }
        public function setName($value){
            $this->tblName = $value;
        }
        public function setNumRow($tblName){
            $sql = "select count(*) from $tblName";
            $result = mysqli_query($this->openConnection(),$sql);
            return $this->tblNumRow = mysqli_fetch_array($result);
        }
    }


?>