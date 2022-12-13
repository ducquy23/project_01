<?php
// echo $_SESSION['user']['id'];
$role = isset($_SESSION['user']) ? $_SESSION['user']['role'] : "";
$count = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart']['buy'] as $values) {
        $count++;
    }
}
// echo $role;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="/public/css/client/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wapper">
        <!-- header -->
        <div class="header">
            <div class="header__nav">
                <ul class="header__category">
                    <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 2) { ?>
                        <li><a href="?role=admin"><i class='bx bx-home-alt' style="margin-right: 3px;font-size: 20px;transform: translateY(2px);"></i>Vào trang quản trị |</a></li>
                        <li>Xin chào: <?php echo $_SESSION['user']['fullname'] ?> | </li>
                        <li><a href="?role=client&mod=login&action=logout">Đăng xuất</a></li>
                    <?php } else if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 1) { ?>
                        <li>Xin chào: <?php echo $_SESSION['user']['fullname'] ?> | </li>
                        <li><a href="?role=client&mod=login&action=logout">Đăng xuất</a></li>
                    <?php } else { ?>
                        <li><a href="?role=client&mod=login">Đăng nhập</a></li>
                        <li><a href="?role=client&mod=register">Đăng ký</a></li>
                    <?php } ?>
                    <li>
                        <a href=""><img src="/public/images/img_client/logo_vietnamese.png" alt=""></a>
                        <a href=""><img src="/public/images/img_client/logo_english.png" alt=""></a>
                    </li>
            </div>
            <div class="header__categoryProduct">
                <div class="header__logo">
                    <a href="?role=client&mod=home"><img src="/public/images/img_client/logo_header.png" alt=""></a>
                </div>
                <ul class="header__listCategory">
                    <li><a href="?role=client&mod=home">TRANG CHỦ</a></li>
                    <li><a href="#">TIN TỨC</a>
                    </li>
                    <li><a href="#">LIÊN HỆ</a>
                    </li>
                    <li><a href="#">THÔNG BÁO</a></li>
                </ul>
                <div class="header__manage">
                    <?php if (isset($_SESSION['user'])) { ?>
                        <a href="?role=client&mod=account"><i class='bx bx-user-circle'></i></a>
                    <?php } ?>
                    <label for="nav-input"><a href="?role=client&mod=cart"><i class='bx bx-cart'></i></a></label>
                    <span class="header__quantity"><?php echo $count ?></span>
                </div>
            </div>
            <input type="checkbox" id="nav-input" class="nav-input" style="opacity: 0;">