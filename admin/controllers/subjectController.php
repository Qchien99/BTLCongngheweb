<?php
    require_once('models/subjectModel.php');
    class subjectController { 
        public function index() {
            $sModel = new subjectModel();

            $sjs = $sModel->getAllSjs();

            include("views/subjects/index.php");
        }
        public function viewAdd()
        {
            include("views/subjects/add.php");
        }
        public function viewEdit()
        {
            include("views/subjects/edit.php");
        }
        public function insert($data){
            $sM = new subjectModel();
            $result = $sM->insert($data);
            
            if($result==true){exit(header("Location:?controller=subject&action=index"));}
            else{echo "Somethin wrong";}
        }
        public function update($data){
            $sM = new subjectModel();
            $result = $sM->update($data);
            
            if($result==true){exit(header("Location:?controller=subject&action=index"));}
            else{echo "Somethin wrong";}
        }
        public function delete()
        {
            $id_can_xoa = $_GET['id'];
            $sM = new subjectModel();
            $sM->delete($id_can_xoa);
            exit(header("Location:?controller=subject&action=index"));
        }
    }

?>