<?php
// show_array($home_cate_child);
// for ($i = 0; $i < count($home_cate_child); $i++) {
//     foreach ($home_cate_child[$i] as $values) {
//         echo "<pre>";
//         print_r($values['name']);
//         echo "</pre>";
//     }
// }
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
                    <li><a href="">Tin tức</a></li>
                    <li><a href="">Cửa hàng</a></li>
                    <li><a href="">Liên hệ</a></li>
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
                    <?php foreach ($home_cate_parent as $values) : ?>
                        <li>
                            <a href="?role=client&mod=home_collections"><?php echo $values['name'] ?></a>
                            <a href=""><i class='bx bx-chevron-down'></i></a>
                            <ul class="header__submenu">
                                <li><a href="">Giày đá bóng</a></li>
                                <li><a href="">Giày chạy bộ</a></li>
                                <li><a href="">Giày cầu lông</a></li>
                                <li><a href="">Giày bóng rổ</a></li>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                    <!-- <li>
                            <a href="">QUẦN ÁO</a>
                            <a href=""><i class='bx bx-chevron-down'></i></a>
                            <ul class="header__submenu">
                                <li><a href="">Áo Polo</a></li>
                                <li><a href="">Áo T-shirt</a></li>
                                <li><a href="">Áo Khoác</a></li>
                                <li><a href="">Áo Hoddies</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">BỘ THỂ THAO</a>
                            <a href=""><i class='bx bx-chevron-down'></i></a>
                            <ul class="header__submenu">
                                <li><a href="">Bộ suvec</a></li>
                                <li><a href="">Bộ bóng đá</a></li>
                                <li><a href="">Bộ cầu lông</a></li>
                                <li><a href="">Bộ bóng chuyền</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">PHỤ KIỆN</a>
                            <a href=""><i class='bx bx-chevron-down'></i></a>
                            <ul class="header__submenu">
                                <li><a href="">Mũ </a></li>
                                <li><a href="">Balo</a></li>
                                <li><a href="">Vớ</a></li>
                            </ul>
                        </li> -->
                </ul>
                <div class="header__search">
                    <input type="text" placeholder="Tìm kiếm sản phẩm">
                    <button type="submit">Tìm kiếm</button>
                </div>
                <div class="header__manage">
                    <a href=""><i class='bx bx-user-circle'></i></a>
                    <label for="nav-input"><i class='bx bx-cart'></i></label>
                    <span class="header__quantity">0</span>
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
                        <button>Xem giỏ hàng</button>
                    </div>
                    <div class="card__pay">
                        <button>Thanh toán</button>
                    </div>
                </div>
            </div>