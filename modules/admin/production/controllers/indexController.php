<?php

function construct()
{
    request_auth();
    load_model('index');
}

function indexAction()
{
    $data['productions'] = get_list_productions();
    load_view('index', $data);
}
function deleteAction()
{
    $id = $_GET['id'];
    delete_productions($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công']);
    header("location:?role=admin&mod=production");
}
function createAction()
{
    $data['list_categories'] = get_list_categories();
    $data['list_brands'] = get_list_brand();
    load_view('create', $data);
}
function updateAction()
{
    load_view('update');
}
function createPostAction()
{
    $title = $_POST['title'];
    $price = $_POST['price'];
    $categories = $_POST['type'];
    $brands = $_POST['brand'];
    $description = $_POST['desc'];
    $file_name = $_FILES['fileUpload']['name'];
    $file_tmp = $_FILES['fileUpload']['tmp_name'];
    move_uploaded_file($file_tmp, 'public/uploads/' . $file_name);
    if (empty($title) || empty($price) || empty('description')) {
        push_notification('danger', ['Vui lòng không bỏ trống']);
        header("location:?role=admin&mod=production&action=create");
        die();
    } else if (!is_numeric($price)) {
        push_notification('danger', ['Vui lòng nhập price là số']);
        header("location:?role=admin&mod=production&action=create");
        die();
    } else {
        insert_productions($title, $price, $categories, $brands, $file_name, $description);
        push_notification('success', ['Tạo mới sản phẩm thành công']);
        header("location:?role=admin&mod=production");
    }
}
// function createAction() {
//     $data['categories'] = get_list_categories();
//     load_view('create', $data);
// }

// function createPostAction() {
//     $name = $_POST['name'];
//     $description = $_POST['description'];
//     if (empty($name)) {
//         push_notification('danger', ['Vui lòng nhập vào tên danh mục']);
//         header('Location: /?role=admin&mod=category&action=create');
//         die();
//     }
//     create_category($name, $description);
//     push_notification('success', ['Tạo mới danh mục sản phẩm thành công']);
//     header('Location: /?role=admin&mod=category');
// }

// function deleteAction() {
//     $id = $_GET['id_cate'];
//     delete_category($id);
//     push_notification('success', ['Xoá danh mục sản phẩm thành công']);
//     header('Location: /?role=admin&mod=category');
// }

// function updateAction()
// {
//     $id = $_GET['id_cate'];
//     $cate = get_one_category($id);
//     $data['category'] = $cate;
//     if ($cate) {
//         load_view('update', $data);
//     } else {
//         header('Location: /?role=admin&mod=category');
//     }
// }

// function updatePostAction() {
//     $id = $_GET['id_cate'];
//     $cate = get_one_category($id);
//     if (!$cate) {
//         header('Location: /?role=admin&mod=category');
//         die();
//     }
//     $name = $_POST['name'];
//     $description = $_POST['description'];
//     if (empty($name)) {
//         push_notification('errors', [
//             'name' => 'Vui lòng nhập vào tên danh mục'
//         ]);
//         header('Location: /?role=admin&mod=category&action=update&id_cate='.$id);
//     }
//     update_category($id, $name, $description);
//     push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
//     header('Location: /?role=admin&mod=category');
// }