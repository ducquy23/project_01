<?php
$notification = get_notification();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/public/css/admin/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="wapper">
        <aside>
            <div class="control">
                <div class="logo">
                    <a href=""><img src="/public/images/img_admin/logo.png" alt=""></a>
                </div>
                <div class="menu">
                    <ul>
                        <li style="background-color: blanchedalmond;">
                            <a href=""><i class='bx bx-home-alt'></i></a>
                            <span><a href="?role=client&mod=home">Home page</a></span>
                        </li>
                        <li>
                            <a href=""><i class='bx bxs-dashboard'></i></a>
                            <span><a href="?role=admin&mod=home">Dashboard</a></span>
                        </li>
                        <li>
                            <a href=""><img src="/public/images/img_admin/qlsp.png" alt=""></a>
                            <span><a href="?role=admin&mod=production">Quản lý sản phẩm</a></span>
                        </li>
                        <li>
                            <a href=""><img src="/public/images/img_admin/qluser.png" alt=""></a>
                            <span><a href="?role=admin&mod=users">Quản lý user</a></span>
                        </li>
                        <li>
                            <a href=""><img src="/public/images/img_admin/qldm.png" alt=""></a>
                            <span><a href="?role=admin&mod=category">Quản lý danh mục</a></span>
                        </li>
                        <li>
                            <a href=""><img src="/public/images/img_admin/qldm.png" alt=""></a>
                            <span><a href="?ctr=ql_comment">Quản lý bình luận</a></span>
                        </li>
                        <li>
                            <a href=""><img src="/public/images/img_admin/thongke.png" alt=""></a>
                            <span><a href="?ctr=ql_thongke">Thống kê</a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <article>
            <header>
                <div class="notification">
                    <?php foreach ($notification as $notification) : ?>
                            <?php foreach ($notification['msgs'] as $msg) : ?>
                                <div class="alert alert-<?php echo $notification['type'] ?>" role="alert"><?php echo $msg ?></div>
                            <?php endforeach; ?>
                    <?php endforeach; ?>
                </div>
                <div class="intro">
                    <a href=""><img src="/public/images/Vector.png" alt=""></a>
                    <p class="name-user">Xin chào,<span class="name">Đức Quý</span></p>
                    <a href=""><img src="/public/images/img_admin/user-1.jpg" alt="" style="width: 50px;"></a>
                </div>
            </header>
            <hr style="margin: 15px 0;">