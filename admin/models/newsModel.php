<?php
    require_once('./config/db.php');
    class newsModel extends Database {
        private $id,$title,$subTitle,$createDate,$content,$type;
        public function getAllNews()
        {
            $conn = $this->openConnection();
            $sql = "select * from news_events";
            $result = mysqli_query($this->openConnection(), $sql);
            $newsPN = mysqli_fetch_all($result);
            return $newsPN;
        }
    }

?>