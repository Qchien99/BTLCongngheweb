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
        public function viewEdit()
        {
            include("views/management/edit.php");
        }
        public function insertIntoMC($data){
            $mM = new managementModel();
            $result = $mM->insertIntoMC($data);
            
            if($result==true){exit(header("Location:?controller=management&action=index"));}
            else{echo "Somethin wrong";}
        }
        public function update($data){
            $mM = new managementModel();
            $result = $mM->update($data);
            
            if($result==true){exit(header("Location:?controller=management&action=index"));}
            else{echo "Somethin wrong";}
        }
        public function delete()
        {
            $id_can_xoa = $_GET['id'];
            $mM = new managementModel();
            $result = $mM->delete($id_can_xoa);
            exit(header("Location:?controller=management&action=index"));
        }
    }
?>