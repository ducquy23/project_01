<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction() {
//     load('helper','format');
// //    show_array($list_users);
//     $data['list_users'] = $list_users;
//     load_view('index', $data);
    $data['list_user'] = get_list_users();
    load_view('index',$data);
}
function deleteAction() {
    $id = $_GET['id'];
    delete_users($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công']);
    header("location:?role=admin&mod=users");
}
function createAction() {
    load_view('create');
}
function updateAction() {
    load_view('update');
}
function createPostAction() {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($fullname) || empty($email) || empty($password)) {
        push_notification('danger', ['Vui lòng nhập đầy đủ thông tin']);
        header('Location: /?role=admin&mod=users&action=create');
        die();
    }
    create_users($fullname,$email,$password);
    push_notification('success', ['Tạo mới danh mục sản phẩm thành công']);
    header('Location: /?role=admin&mod=users');
}
// function addAction() {
//     echo "Thêm dữ liệu";
// }

// function editAction() {
//     $id = (int)$_GET['id'];
//     $item = get_user_by_id($id);
//     show_array($item);
// }

// function testAction() {
//     $data = [];
//     $data['title'] = "Nguyễn Văn A";
//     load_view('test', $data);
// }