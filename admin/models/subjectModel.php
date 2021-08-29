<?php
    require_once('./config/db.php');
    class subjectModel extends Database{
        public function getAllSjs()
        {
            $sql = "SELECT * FROM tblsubjects";
            $result = mysqli_query($this->openConnection(), $sql);
            $sjs = mysqli_fetch_all($result);
            return $sjs;
        }
        public function insert($data)
        {
            $conn = $this->openConnection();
            $sql = "insert into tblsubjects(id, name, e_name, address,tel,email,type) 
            values(".$data['id'].",'".$data['name']."','".$data['e_name']."','".$data['address']."','".$data['tel']."','".$data['email']."','".$data['type']."')";
            return $result = mysqli_query($conn, $sql);
        }
        public function update($data)
        {
            $conn = $this->openConnection();
            $sql = "update tblsubjects set
            name='".$data['name']."',e_name='".$data['e_name']."',address='".$data['address']."',tel='".$data['tel']."',email='".$data['email']."',type='".$data['type']."'
            where id=".$data['id'];
            return $result = mysqli_query($conn, $sql);
        }
        public function delete($id)
        {
            $conn = $this->openConnection();
            $sql = "DELETE FROM tblsubjects WHERE id=$id";
            mysqli_query($conn,$sql);
        }
    }



?>