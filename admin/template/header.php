<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Quản lý </title>
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxs-school' style='color:#ffffff'  ></i>
            <span class="logo_name">ĐH Bách Khoa</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="index.php?controller=system&action=index">Category</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="index.php?controller=user&action=index">
                    <i class='bx bx-user' style='color:#fffcfc' ></i>
                        <span class="link_name">Quản trị viên</span>
                    </a>
                </div>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="index.php?controller=user&action=index">Quản trị viên</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="index.php?controller=post&action=index">
                    <i class='bx bx-news' style='color:#fffcfc' ></i>
                        <span class="link_name">Tin tức</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Tin tức</a></li>
                    <li><a href="index.php?controller=post&action=index">Quản lý</a></li>
                    <li><a href="index.php?controller=post&action=viewAdd">Thêm mới</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="index.php?controller=employee&action=index"">
                        <i class='bx bxs-face'></i>
                        <span class="link_name">Cán bộ</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Cán bộ</a></li>
                    <li><a href="index.php?controller=employee&action=index">Quản lý</a></li>
                    <li><a href="index.php?controller=employee&action=viewAdd">Thêm mới</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="index.php?controller=subject&action=index">
                    <i class='bx bxs-institution' style='color:#ffffff'  ></i>
                        <span class="link_name">Bộ môn-Trung tâm</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Bộ môn-Trung tâm</a></li>
                    <li><a href="index.php?controller=subject&action=index">Quản lý</a></li>
                    <li><a href="index.php?controller=subject&action=viewAdd">Thêm mới</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Setting</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Setting</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="img/datle.jpg" alt="profileImg">
                    </div>
                    <div class="name-job">
                        <div class="profile_name">Đạt Lê</div>
                        <div class="job">Quản trị viên</div>
                    </div>
                    <a href="http://localhost/BTLCongngheweb/admin/index.php?controller=user&action=logout">
                        <i class='bx bx-log-out'></i>
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">