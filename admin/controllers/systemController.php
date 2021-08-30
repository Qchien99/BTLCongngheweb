<?php
    require 'models/systemModel.php';
    class systemController {
        public function index(){
            $users = 'user';
            $employees = 'tblemployees';
            $posts = 'tblposts';
            $subjects = 'tblSubjects';
            $sMU = new systemModel();
            $sMU->setNumRow($users);
            $num1=$sMU->getNumRow();
            $sME = new systemModel();
            $sME->setNumRow($employees);
            $num2=$sME->getNumRow();
            $sMP = new systemModel();
            $sMP->setNumRow($posts);
            $num3=$sMP->getNumRow();
            $sMS = new systemModel();
            $sMS->setNumRow($subjects);
            $num4=$sMS->getNumRow();
            require_once 'views/system/index.php';
        }
    }

?>