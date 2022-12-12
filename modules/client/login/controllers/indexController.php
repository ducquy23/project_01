<?php
function construct() {
    load_model('index');
}
function indexAction() {
    load_view('index');
}
function loginPostAction() {
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $users = check_user($fullname,$password);
    if(empty($fullname) || empty($password)) {
        push_notification('danger', ['Vui lòng không bỏ trống']);
        header("location:?role=client&mod=login");
    }else if(is_array($users)) {
        $_SESSION['user'] = $users;
        unset($_SESSION['cart']);
        header("location:index.php");
    }else {
        push_notification('danger', ['Tài khoản không tồn tại']);
        header("location:?role=client&mod=login");
    }
}
function logoutAction() {
    unset($_SESSION['user']);
    unset($_SESSION['cart']);
    header("location:index.php");
}
function forgotAction() {
    load_view('forgot');
}
function forgotPostAction() {
    $email = $_POST['email'];
    if(empty($email)) {
        push_notification("danger",['Vui lòng không bỏ trống']);
        header("location:?role=client&mod=login&action=forgot");
        die();
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        push_notification("danger",['Vui nhập đúng định dạng email']);
        header("location:?role=client&mod=login&action=forgot");
        die();
    }
    $check_email = check_email($email);
    if(is_array($check_email)) {
        $password = $check_email['password'];
        push_notification("success",["Mật khẩu là :".$password]);
        header("location:?role=client&mod=login&action=forgot");
    }else {
        push_notification("danger",['Email không tồn tại']);
        header("location:?role=client&mod=login&action=forgot");
        die();
    }
    
}
?>