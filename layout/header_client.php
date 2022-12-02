<?php
// echo $_SESSION['user']['id'];
$role = isset($_SESSION['user']) ? $_SESSION['user']['role'] : "";
// echo $role;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="/public/css/client/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
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
                    <?php }else { ?>
                    <li><a href="?role=client&mod=login">Đăng nhập</a></li>
                    <li><a href="?role=client&mod=register">Đăng ký</a></li>
                    <?php }?>
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
                    <li>
                        <a href="?role=client&mod=home_collections&id=5&parent_id=1">GIÀY</a>
                        <a href=""><i class='bx bx-chevron-down'></i></a>
                        <ul class="header__submenu">
                            <?php foreach ($home_list_cate_football as $values) : ?>
                                <li><a href="?role=client&mod=home_collections&id=<?php echo $values['id'] ?>&parent_id=<?php echo $values['parent_id'] ?>"><?php echo $values['name'] ?> </a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li>
                        <a href="?role=client&mod=home_collections&id=20&parent_id=4">BÓNG</a>
                        <a href=""><i class='bx bx-chevron-down'></i></a>
                        <ul class="header__submenu">
                            <?php foreach ($home_list_cate_shoes as $values) : ?>
                                <li><a href="?role=client&mod=home_collections&id=<?php echo $values['id'] ?>&parent_id=<?php echo $values['parent_id'] ?>"><?php echo $values['name'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
                <div class="header__search">
                    <input type="text" placeholder="Tìm kiếm sản phẩm">
                    <button type="submit">Tìm kiếm</button>
                </div>
                <div class="header__manage">
                    <a href=""><i class='bx bx-user-circle'></i></a>
                    <label for="nav-input"><a href="?role=client&mod=cart"><i class='bx bx-cart'></i></a></label>
                    <!-- <span class="header__quantity">0</span> -->
                </div>
            </div>
            <input type="checkbox" id="nav-input" class="nav-input" style="opacity: 0;">
            <div class="card" style="position: fixed;right: 7px;top: 0px;">
                <div class="card__name">
                    <p class="cart">Giỏ hàng</p>
                    <label for="nav-input">
                        <i class='bx bx-message-square-x'></i>
                    </label>
                </div>
                <div class="card__title">
                    <a href=""><i class='bx bx-cart bx-card-1'></i></a>
                    <p>Hiện chưa có sản phẩm</p>
                    <hr class="card__line">
                </div>
                <div class="card__money">
                    <div class="card__total">Tổng tiền:</div>
                    <div class="card__price">0 <sup><u>đ</u></sup></div>
                </div>
                <div class="card__btn">
                    <div class="card__view">
                       <a href="?role=client&mod=cart"><button>Xem giỏ hàng</button></a>
                    </div>
                    <div class="card__pay">
                        <button>Thanh toán</button>
                    </div>
                </div>
            </div>