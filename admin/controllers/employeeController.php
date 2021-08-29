<?php
    require_once('models/employeeModel.php');
    class employeeController {
        public function index()
        {
            $employeeModel = new employeeModel();
            $employees = $employeeModel->getAllemployees();
            include("views/employees/index.php");
        }
        public function viewAdd()
        {
            include("views/employees/add.php");
        }
        public function viewEdit()
        {
            include("views/employees/edit.php");
        }
        public function insertIntoMC($data){
            $eM = new employeeModel();
            $result = $eM->insertIntoMC($data);
            
            if($result==true){exit(header("Location:?controller=employee&action=index"));}
            else{echo "Somethin wrong";}
        }
        public function update($data){
            $eM = new employeeModel();
            $result = $eM->update($data);
            
            if($result==true){exit(header("Location:?controller=employee&action=index"));}
            else{echo "Somethin wrong";}
        }
        public function delete()
        {
            $id_can_xoa = $_GET['id'];
            $eM = new employeeModel();
            $result = $eM->delete($id_can_xoa);
            exit(header("Location:?controller=employee&action=index"));
        }
    }
?>