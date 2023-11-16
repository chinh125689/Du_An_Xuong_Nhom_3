<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
        <div class="search">
            <input type="text" name="search" placeholder="Tìm khóa học, giảng viên">
            <button type="submit" class="btn btn-outline-dark"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="kich_hoat_khoa_hoc">
            <a href="">
                <i class="fa-solid fa-circle-check"></i>
                <p>Kích hoạt khóa học</p>
            </a>
        </div>
        <div class="cart">
            <a href=""><i class="fa-solid fa-cart-arrow-down"></i></a>
        </div>
        <div class="log_in">
            <div class="sign-in">
                <a href="dangnhap.html">ĐĂNG NHẬP</a>
            </div>
            <div class="register">
                <a href="dangki.html"><button type="submit">ĐĂNG KÍ</button></a>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?act=introduce">Giới thiệu</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Danh mục môn học
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-dark" href="#">Lập trình</a>
                        <a class="dropdown-item text-dark" href="#">Sale</a>
                        <a class="dropdown-item text-dark" href="#">Marketing</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?act=blog">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Liên hệ</a>
                </li>
            </ul>
        </div>
    </nav>