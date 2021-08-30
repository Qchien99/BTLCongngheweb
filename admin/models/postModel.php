<?php
    require_once('./config/db.php');
    class postModel extends Database {
        private $id,$title,$subTitle,$createDate,$content,$type;
        public function getAllPosts()
        {
            $conn = $this->openConnection();
            $sql = "select * from tblposts";
            $result = mysqli_query($conn, $sql);
            $newsPN = mysqli_fetch_all($result);
            return $newsPN;
        }
        public function insert($data)
        {
            $conn = $this->openConnection();
            $sql = "insert into tblposts(id,title,sub_title,content,type,img) 
            values(".$data['id'].",'".$data['title']."','".$data['sub_title']."','".$data['content']."','".$data['type']."','".$data['img']."')";
            echo $sql;
            return $result = mysqli_query($conn, $sql);
        }
        public function update($data)
        {
            $conn = $this->openConnection();
            $sql = "update tblposts set
            title='".$data['title']."',sub_title='".$data['sub_title']."',content='".$data['content']."',type='".$data['type']."',img='".$data['img']."',create_date=NOW()
            where id=".$data['id'];
            echo $sql;
            return $result = mysqli_query($conn, $sql);
        }
        public function delete($id)
        {
            $conn = $this->openConnection();
            $sql = "DELETE FROM tblposts WHERE id=$id";
            mysqli_query($conn,$sql);
        }
    }

?>