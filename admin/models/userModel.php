<?php
    require_once('./config/db.php');
    class userModel extends Database {
        private $id_user,$hoten,$ngaysinh,$email,$username,$pass,$role;
        public function login($username,$pass){
            $conn = $this->openConnection();
            $sql = "SELECT * FROM user WHERE username='$username' AND pass='$pass'";
            return $result = mysqli_query($conn,$sql);
        }
        public function logout(){
            session_destroy();
            header('location:../admin/');
        }
        public function getAllUsers(){
            $sql = "SELECT * FROM user";
            $result = mysqli_query($this->openConnection(), $sql);
            $users = mysqli_fetch_all($result);
            return $users;
        }
        public function deteleFromUsers($id_user){
            $sql = "delete FROM user where id_user ='$id_user'";
            $result = mysqli_query($this->openConnection(), $sql);
            return $result;
        }
        public function insertIntoUsers($id_user,$hoten,$ngaysinh,$email,$username,$pass,$role){
            $sql = "insert into user values('$id_user','$hoten','$ngaysinh','$email','$username','$pass',null)";
            $result = mysqli_query($this->openConnection(), $sql);
            return $result;
        }
    }

?>