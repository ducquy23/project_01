<?php get_header('', 'Đăng nhập');
$notification = get_notification();
?>

<body>
    <style>
        .footer {
            margin-top: 100px;
        }
    </style>
    <div class="container">
        </p>
        <!-- <p style="font-size: 20px ;">Welcome Donglucsport</p> -->
        <h2 style="margin: 30px 0;">Login to your account</h2>
        <div class="notification">
            <?php foreach ($notification as $notification) : ?>
                <?php foreach ($notification['msgs'] as $msg) : ?>
                    <div class="alert alert-<?php echo $notification['type'] ?>" role="alert"><?php echo $msg ?></div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
        <form action="?role=client&mod=login&action=login" method="POST">
            <p id="pass" class="form-group">
                <i class='bx bxs-user' style="font-size:20px ;">Nhập tài khoản :</i>
                <input class="form-control" name="fullname" type="text" placeholder="Enter Account">
            </p>
            <br>
            <p id="form-group">
                <i class='bx bx-low-vision' style="font-size:20px ;">Nhập mật khẩu :</i>
                <input id="type" class="form-control" name="password" type="password" placeholder="Enter Password">
            </p>
            <br>
            <button class="btn btn-primary" name="submit" type="submit">Log in</button>
        </form>
        <a href="?role=client&mod=login&action=forgot" style="text-decoration: none  ;">
            <p style="font-size:18px;padding-top: 20px ;">Forgot password?</p>
        </a>
    </div>
    <script src="js.js"></script>
</body>

</html>
<?php get_footer('') ?>