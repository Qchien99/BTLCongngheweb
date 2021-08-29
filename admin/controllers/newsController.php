<?php
    require_once('models/newsModel.php');
    class newsController {
        public function index()
        {
            $newsModel = new newsModel();
            $newsPN = $newsModel->getAllNews();
            include("views/news/index.php");
        }
        public function viewAdd()
        {
            include("views/news/add.php");
        }
        public function viewEdit()
        {
            include("views/news/edit.php");
        }
        public function insertIntoNews($data){
            $newsModel = new newsModel();
            $result = $newsModel->insertIntoNews($data);
            
            if($result==true){exit(header("Location:?controller=news&action=index"));}
            else{echo "Somethin wrong";}
        }
        public function updateNews($data){
            $newsModel = new newsModel();
            $result = $newsModel->updateNews($data);
            
            if($result==true){exit(header("Location:?controller=news&action=index"));}
            else{echo "Somethin wrong";}
        }
        public function delete()
        {
            $id_can_xoa = $_GET['id'];
            $newsModel = new newsModel();
            $newsModel->delete($id_can_xoa);
            exit(header("Location:?controller=news&action=index"));
        }
    }


?>