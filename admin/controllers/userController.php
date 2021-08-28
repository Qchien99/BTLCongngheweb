<?php 
    require_once('models/userModel.php');
    class userController {
        public function getUser($username,$pass){
            $usermodel = new userModel();
            $result = $usermodel->login($username,$pass);
            return $count= mysqli_num_rows($result);
        }
        public function logout(){
            $usermodel = new userModel();
            $usermodel->logout();
        }
        public function index() {
            $userModel = new userModel();

            $users = $userModel->getAllUsers();

            include("views/user/index.php");
        }
    }
?>