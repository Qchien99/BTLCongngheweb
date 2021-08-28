<?php
    require_once('./config/db.php');
    class managementModel extends Database {
        private $id,$name,$position,$about,$email,$img,$sb_id;
        public function getAllManagements(){
            $sql = "SELECT * FROM management_dpm";
            $result = mysqli_query($this->openConnection(), $sql);
            $managements = mysqli_fetch_all($result);
            return $managements;
        }
        public function insertIntoMC($data)
        {
            $conn = $this->openConnection();
            $sql = "insert into management_dpm(id,name,position, about,email,img,sb_id)
            values(".$data['id'].",'".$data['name']."','".$data['position']."','".$data['about']."','".$data['email']."','".$data['img']."',".$data['sb_id'].")";
            return $result = mysqli_query($conn, $sql);
        }

    }
?>