<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $data['home_list_cate_football'] = get_list_categories_football();
    $data['home_list_cate_shoes'] = get_list_categories_shoes();
    load_view('index',$data);
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
        header("location:index.php");
    }else {
        push_notification('danger', ['Tài khoản không tồn tại']);
        header("location:?role=client&mod=login");
    }
}
function logoutAction() {
    unset($_SESSION['user']);
    header("location:index.php");
}
?>