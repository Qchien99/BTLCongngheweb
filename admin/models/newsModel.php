<?php
    require_once('./config/db.php');
    class newsModel extends Database {
        private $id,$title,$subTitle,$createDate,$content,$type;
        public function getAllNews()
        {
            $conn = $this->openConnection();
            $sql = "select * from news_events";
            $result = mysqli_query($conn, $sql);
            $newsPN = mysqli_fetch_all($result);
            return $newsPN;
        }
        public function insertIntoNews($data)
        {
            $conn = $this->openConnection();
            $sql = "insert into news_events(id,title,sub_title,content,type) 
            values(".$data['id'].",'".$data['title']."','".$data['sub_title']."','".$data['content']."','".$data['type']."')";
            return $result = mysqli_query($conn, $sql);
        }
        public function updateNews($data)
        {
            $conn = $this->openConnection();
            $sql = "update news_events set
            title='".$data['title']."',sub_title='".$data['sub_title']."',content='".$data['content']."',type='".$data['type']."',create_date=NOW()
            where id=".$data['id'];
            echo $sql;
            return $result = mysqli_query($conn, $sql);
        }
        public function delete($id)
        {
            $conn = $this->openConnection();
            $sql = "DELETE FROM news_events WHERE id=$id";
            mysqli_query($conn,$sql);
        }
    }

?>