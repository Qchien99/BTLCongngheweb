<?php
    require('./admin/config/db.php');
    class postModel extends Database {
        private $ID,$title,$subTitle,$createDate,$content,$type,$img;

        public function getPostByType($type,$limit){
            $sql = "select * from tblposts where type='$type' order by id desc limit $limit";
            $result = mysqli_query($this->openConnection(),$sql);
            return mysqli_fetch_all($result);
        }
    }
?>