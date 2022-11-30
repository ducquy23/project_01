<?php
function construct()
{
    load_model('index');
}
function indexAction()
{
    $data['home_list_cate_football'] = get_list_categories_football();
    $data['home_list_cate_shoes'] = get_list_categories_shoes();
    // $data['list_users'] = get_list_users();
    load_view('index', $data);
}
function indexPostAction()
{
    $users = get_list_users();
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $count = 0;
    // show_array($users);

    if (empty($fullname) || empty($email) || empty($password)) {
        push_notification('danger', ['Vui lòng không bỏ trống']);
        header("location: ?role=client&mod=register");
        die();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        push_notification('danger', ['Vui lòng nhập đúng định dạng email']);
        header("location: ?role=client&mod=register");
        die();
    }
    // Kiểm tra tên tài khoản đã tồn tại chưa
    for ($i = 0; $i < count($users); $i++) {
        if (in_array($fullname, $users[$i])) {
            $count = 0;
            break;
        } else {
            $count++;
        }
    }
    if ($count == 0) {
        push_notification('danger', ['Tên tài khoản đã tồn tại']);
        header("location:?role=client&mod=register");
        die();
    }
    // Kiểm tra email đã tồn tại chưa
    for ($i = 0; $i < count($users); $i++) {
        if (in_array($email, $users[$i])) {
            $count = 0;
            break;
        } else {
            $count++;
        }
    }
    if ($count == 0) {
        push_notification('danger', ['Tên email đã tồn tại']);
        header("location:?role=client&mod=register");
        die();
    }
    create_users($fullname, $email, $password);
    push_notification('success', ["Bạn đã đăng ký tài khoản thành công"]);
    header("location: ?role=client&mod=register");
}
