<?php
    require_once('models/managementModel.php');
    class managementController {
        public function index()
        {
            $managementModel = new managementModel();
            $managements = $managementModel->getAllManagements();
            include("views/management/index.php");
        }
        public function viewAdd()
        {
            include("views/management/add.php");
        }
        public function insertIntoMC($data){
            $mC = new managementModel();
            $result = $mC->insertIntoMC($data);
            
            if($result==true){exit(header("Location:?controller=management&action=index"));}
            else{echo "Somethin wrong";}
        }
    }
?>