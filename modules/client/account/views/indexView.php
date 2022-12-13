<?php get_header() ?>
<div class="main-account">
<div class="main-account__form">
    <div class="main-account__header">
        <h4>Quản lý tài khoản</h4>
    </div>
    <div class="main-account__body">
        <div class="form-name">
            <p>Tên tài khoản : <span><?php echo (isset($_SESSION['user'])) ? $_SESSION['user']['fullname'] : "" ?></span></p>
        </div>
        <div class="form-email">
            <p>Email : <span><?php echo (isset($_SESSION['user'])) ? $_SESSION['user']['email'] : "" ?></span></p>
        </div>
        <div class="form-update-password">  
            <a href="">Đổi mật khẩu</a>
        </div>
    </div>
</div>
</div>
<?php get_footer() ?>