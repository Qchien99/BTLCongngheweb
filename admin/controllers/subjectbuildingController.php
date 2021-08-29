<?php
    require_once('models/subjectBuildingModel.php');
    class subjectBuildingController { 
        public function index() {
            $sbModel = new subjectBuildingModel();

            $sbs = $sbModel->getAllSBs();

            include("views/subjectBuilding/index.php");
        }
        public function viewAdd()
        {
            include("views/subjectBuilding/add.php");
        }
        public function viewEdit()
        {
            include("views/subjectBuilding/edit.php");
        }
        public function insertIntoSB($data){
            $sBM = new subjectBuildingModel();
            $result = $sBM->insertIntoSB($data);
            
            if($result==true){exit(header("Location:?controller=subjectBuilding&action=index"));}
            else{echo "Somethin wrong";}
        }
        public function updateSB($data){
            $sBM = new subjectBuildingModel();
            $result = $sBM->updateSB($data);
            
            if($result==true){exit(header("Location:?controller=subjectBuilding&action=index"));}
            else{echo "Somethin wrong";}
        }
        public function delete()
        {
            $id_can_xoa = $_GET['id'];
            $sBM = new subjectBuildingModel();
            $sBM->delete($id_can_xoa);
            exit(header("Location:?controller=subjectBuilding&action=index"));
        }
    }

?>