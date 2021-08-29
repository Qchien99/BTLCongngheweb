<?php
    require_once('models/postModel.php');
    class postController {
        public function index()
        {
            $postModel = new postModel();
            $posts = $postModel->getAllposts();
            include("views/posts/index.php");
        }
        public function viewAdd()
        {
            include("views/posts/add.php");
        }
        public function viewEdit()
        {
            include("views/posts/edit.php");
        }
        public function insert($data){
            $postModel = new postModel();
            $result = $postModel->insert($data);
            
            if($result==true){exit(header("Location:?controller=post&action=index"));}
            else{echo "Somethin wrong";}
        }
        public function update($data){
            $postModel = new postModel();
            $result = $postModel->update($data);
            
            if($result==true){exit(header("Location:?controller=post&action=index"));}
            else{echo "Somethin wrong";}
        }
        public function delete()
        {
            $id_can_xoa = $_GET['id'];
            $postModel = new postModel();
            $postModel->delete($id_can_xoa);
            exit(header("Location:?controller=post&action=index"));
        }
    }


?>