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
            return $result = mysqli_query($conn, $sql);
        }
        public function updateSB($data)
        {
            $conn = $this->openConnection();
            $sql = "update subject_building set
            name='".$data['name']."',e_name='".$data['e_name']."',address='".$data['address']."',tel='".$data['tel']."',email='".$data['email']."',type='".$data['type']."'
            where id=".$data['id'];
            return $result = mysqli_query($conn, $sql);
        }
        public function delete($id)
        {
            $conn = $this->openConnection();
            $sql = "DELETE FROM subject_building WHERE id=$id";
            mysqli_query($conn,$sql);
        }
    }



?>