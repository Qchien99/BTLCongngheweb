<?php
    require_once('./config/db.php');
    class userModel extends Database {
        private $id,$name,$position,$about,$about,$email,$img,$sb_id;
        public function getAllManagements(){
            $sql = "SELECT * FROM management_dpm";
            $result = mysqli_query($this->openConnection(), $sql);
            $managements = mysqli_fetch_all($result);
            return $managements;
        }


    }
?>