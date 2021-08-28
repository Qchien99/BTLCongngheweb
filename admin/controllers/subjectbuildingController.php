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
        public function insertIntoSB($data){
            $sBM = new subjectBuildingModel();
            $result = $sBM->insertIntoSB($data);
            
            if($result==true){exit(header("Location:?controller=subjectBuilding&action=index"));}
            else{echo "Somethin wrong";}
        }
    }

?>