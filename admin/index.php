<?php
    include_once("template/header.php");
    // 1. Xác định Controller và Action
    $controller = isset($_GET['controller']) ? $_GET['controller'] : 'system';
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';
    
    // 2. Xác định Tệp tin ứng với Controller. user => User
    $controller = ucfirst($controller); 
    //nối thêm chuỗi Controller vào
    $controller .= "Controller";
    
    //kiem tra nếu file controller không tồn tại trong thư mục thì báo lỗi,
    //thực tế có thể chuyển hướng user tới trang not found mà ban jtuwj xây dựng
    $pathController = "controllers/$controller.php";
    if (!file_exists($pathController)) {
        die("Trang bạn tìm không tồn tại");
    }
    require_once "$pathController";
    $object = new $controller;
    $object->$action();

    include("template/footer.php");
?>