<?php
    require 'models/postModel.php';
    class homeController {
        public function index(){
            $pCNotify = new postModel();
            $post1 = $pCNotify->getPostByType('THÔNG BÁO',4);
            $pCEvent = new postModel();
            $post2 = $pCEvent->getPostByType('SỰ KIỆN',6);
            $pCEA = new postModel();
            $post3 = $pCEA->getPostByType('ĐÀO TẠO-TUYỂN SINH',2);
            $pCFA = new postModel();
            $post4 = $pCFA->getPostByType('HỢP TÁC ĐỐI NGOẠI',2);
            $pCA = new postModel();
            $post5 = $pCA->getPostByType('CỰU SINH VIÊN',6);
            include 'views/home/index.php';
        }
    }

?>