<?php 
    ob_start();
    include "template/header.php";

    $controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';
    
    $controller = ucfirst($controller); 
    $controller .= "Controller";
    
    $pathController = "controllers/$controller.php";
    if (!file_exists($pathController)) {
        die("Trang bạn tìm không tồn tại");
    }

    require_once "$pathController";
    $object = new $controller;
    $object->$action();
    include 'template/footer.php' 
?>