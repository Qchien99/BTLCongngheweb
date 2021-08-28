<?php
    require_once('./config/db.php');
    class subjectBuildingModel extends Database{
        public function getAllSBs()
        {
            $sql = "SELECT * FROM subject_building";
            $result = mysqli_query($this->openConnection(), $sql);
            $sbs = mysqli_fetch_all($result);
            return $sbs;
        }
        public function insertIntoSB($data)
        {
            $conn = $this->openConnection();
            $sql = "insert into subject_building(id, name, e_name, address,tel,email,type) 
            values(".$data['id'].",'".$data['name']."','".$data['e_name']."','".$data['address']."','".$data['tel']."','".$data['email']."','".$data['type']."')";
            echo $sql;
            return $result = mysqli_query($conn, $sql);
        }
    }



?>