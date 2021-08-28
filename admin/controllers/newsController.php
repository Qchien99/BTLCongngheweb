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
        public function insertIntoNews($data){
            $newsModel = new newsModel();
            $result = $newsModel->insertIntoNews($data);
            
            if($result==true){exit(header("Location:?controller=news&action=index"));}
            else{echo "Somethin wrong";}
        }
    }


?>