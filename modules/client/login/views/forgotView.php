<?php get_header('', "Quên mật khẩu");
$notification = get_notification();
?>
<style>
    .footer {
        margin-top: 100px;
    }
</style>

<body>
    <div class="container">
        <form action="?role=client&mod=login&action=forgot" method="POST">
            <h2>Forget account</h2>
            <br>
            <p id="pass" class="form-group">
                <i class='bx bxs-user' style="font-size:20px;">Nhập email</i>
                <input class="form-control" type="text" name="email" style="margin-top: 10px;" placeholder=" Enter Email">
            </p>
            <br>
            <?php foreach ($notification as $notification) : ?>
                <?php foreach ($notification['msgs'] as $msgs) : ?>
                    <div class="notification container">
                        <h3 class="alert alert-<?php echo $notification['type'] ?> text-center" role="alert"><?php echo $msgs ?></h3>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
            <button class="btn btn-primary" type="submit">Tiếp tục</button>
            <a href="./register.php" style="font-size: 20px ; text-decoration: none;">
        </form>
    </div>
    <script src="js.js"></script>
</body>

</html>
<?php get_footer('') ?>