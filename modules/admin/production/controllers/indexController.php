<?php

function construct()
{
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

    $id = $_GET['id'];
    $data['data_update_production'] = get_one_production($id);
    $data['all_categories'] = get_all_category();
    $data['all_brands'] = get_all_brands();

    load_view('update', $data);
}
function createPostAction()
{
    $title = $_POST['title'];
    $price = $_POST['price'];
    $categories = $_POST['type'];
    $brands = $_POST['brand'];
    $description = $_POST['desc'];
    $special = $_POST['special'];
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
        insert_productions($title, $price, $categories, $brands, $file_name, $description,$special);
        push_notification('success', ['Tạo mới sản phẩm thành công']);
        header("location:?role=admin&mod=production");
    }
}
function updatePostAction()
{
    $id = $_POST['product_id'];
    $productName = $_POST['title'];
    $productPrice = $_POST['price'];
    $productType = $_POST['categories'];
    $productBrands = $_POST['brands'];
    $file_name = $_FILES['img']['name'];
    $file_tmp = $_FILES['img']['tmp_name'];
    $productDesc = $_POST['productDesc'];
    $img_current = $_POST['name_image'];
    $special = $_POST['special'];
    if(empty($file_name)) {
        $file_name = $img_current;
    }
    move_uploaded_file($file_tmp, "public/uploads/" . $file_name);
    if (empty($productName) || empty($productPrice) || empty($productDesc)) {
        push_notification('danger', ['Vui lòng không bỏ trống']);
        header("location: /?role=admin&mod=production&action=update&id=" . $id);
        die();
    } else {
        update_production($id, $productName, $productPrice, $productBrands, $productType,$file_name, $productDesc,$special);
        push_notification('success', ['Update user thành công']);
        header("location: /?role=admin&mod=production");
    }
}
