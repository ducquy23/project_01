<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $data['list_user'] = get_list_users();
    load_view('index', $data);
}
function deleteAction()
{
    $id = $_GET['id'];
    delete_users($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công']);
    header("location:?role=admin&mod=users");
}
function createAction()
{
    load_view('create');
}
function updateAction()
{
    $id = $_GET['id'];
    $data['data_update_user'] = get_one_user_by_id($id);
    load_view('update',$data);
}

function createPostAction()
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    if (empty($username) || empty($password) || empty($email)) {
        push_notification('danger', ['Vui lòng Không bỏ trống']);
        header('Location: /?role=admin&mod=users&action=create');
        die();
    } else {
        create_user($username, $password, $email);
        push_notification('success', ['Tạo mới User thành công']);
        header('Location: /?role=admin&mod=users');
    }

}
function updatePostAction() {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    if(empty($username) || empty($password) || empty($email)) {
        push_notification('danger', ['Vui lòng không bỏ trống']);
        header("location: /?role=admin&mod=users&action=update&id=". $id);
        die();
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        push_notification('danger',['Vui lòng nhập đúng định dạng email']);
        header("location: /?role=admin&mod=users&action=update&id=". $id);
        die();
    }
    else {
        update_user($id,$username,$password,$email);
        push_notification('success', ['Update user thành công']);
        header("location: /?role=admin&mod=users");
    }

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