<?php
    require_once('models/newsModel.php');
    class newsController {
        public function index()
        {
            $newsModel = new newsModel();
            $newsPN = $newsModel->getAllNews();
            include("views/news/index.php");
        }
    }


?>