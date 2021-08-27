<?php 
    // // Bước 01: Kết nối Server:
    // //Định nghĩa Hằng số trong PHP
    // define('SITEURL','http://localhost/BTLCongngheweb');
    // define('HOST','localhost');
    // define('USER','root');
    // define('PASS','');
    // define('DB_NAME','db_bku');
    // define('PORT','3306');
    // $conn = mysqli_connect(HOST,USER,PASS,DB_NAME);
    // if(!$conn){
    //     die("Không thể kết nối: ".mysqli_connect_error());
    // }
    class Database{
        private $host = 'localhost',$user = 'root',$pass = '',$db = 'db_bku',$port = '3306';
 
        public function openConnection(){
            $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
            if(!$conn){
                die("Khong the ket noi");
            }
            return $conn;
        }
 
        public function closeConnection($conn){
            mysqli_close($conn);
        }
    }
?>