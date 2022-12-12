<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $data['brands'] = get_list_brands();
    load_view('index', $data);
}
function deleteAction()
{
    $id = $_GET['id'];
    delete_brands($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công']);
    header("location:?role=admin&mod=brands");
}
function createAction()
{
    load_view('create');
}
function updateAction()
{
    $id = $_GET['id'];
    $data['data_update_brands'] = get_one_brands($id);
    load_view('update', $data);
}
function createPostAction()
{
    $name = $_POST['name'];
    if (empty($name)) {
        push_notification('danger', ['Vui lòng nhập vào tên thương hiệu']);
        header('Location: /?role=admin&mod=brands&action=create');
        die();
    }
    create_brands($name);
    push_notification('success', ['Tạo mới thương hiệu sản phẩm thành công']);
    header('Location: /?role=admin&mod=brands');
}
function updatePostAction()
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    if (empty($name)) {
        push_notification('danger', [
            'name' => 'Vui lòng nhập vào tên thương hiệu'
        ]);
        header('Location: /?role=admin&mod=brands&action=update&id=' . $id);
    } else {
        update_brands($id, $name);
        push_notification('success', ['Chỉnh sửa thương hiệu sản phẩm thành công']);
        header('Location: /?role=admin&mod=brands');
    }
}
