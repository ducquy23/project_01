<?php

function construct()
{
    request_auth();
    load_model('index');
}

function indexAction()
{
    $data['categories'] = get_list_categories();
    load_view('index', $data);
}
function deleteAction()
{
    $id = $_GET['id'];
    delete_categories($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công']);
    header("location:?role=admin&mod=category");
}
function createAction()
{
    load_view('create');
}
function updateAction()
{
    $id = $_GET['id'];
    $data['data_update_cate'] = get_one_category($id);
    load_view('update', $data);
}
function createPostAction()
{
    $name = $_POST['name'];
    if (empty($name)) {
        push_notification('danger', ['Vui lòng nhập vào tên danh mục']);
        header('Location: /?role=admin&mod=category&action=create');
        die();
    }
    create_categories($name);
    push_notification('success', ['Tạo mới danh mục sản phẩm thành công']);
    header('Location: /?role=admin&mod=category');
}
function updatePostAction()
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    if (empty($name)) {
        push_notification('danger', [
            'name' => 'Vui lòng nhập vào tên danh mục'
        ]);
        header('Location: /?role=admin&mod=category&action=update&id=' . $id);
    } else {
        update_category($id, $name);
        push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
        header('Location: /?role=admin&mod=category');
    }
}
