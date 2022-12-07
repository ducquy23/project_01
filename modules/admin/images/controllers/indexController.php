<?php 
function construct() {
    load_model('index');
}
function indexAction() {
    $data['list_img'] = get_imgs();
    load_view('index',$data);
    // show_array($data['list_img']);
}
function createAction() {
    $data['list_products'] = get_list_product();
    load_view('create',$data);
}
function createPostAction() {
    $id = $_POST['name'];
    $file_name = $_FILES['fileUpload']['name'];
    $file_tmp = $_FILES['fileUpload']['tmp_name'];
    move_uploaded_file($file_tmp, 'public/uploads/' . $file_name);
    insert_img($id,$file_name);
    push_notification('success', ['Thêm ảnh thành công']);
    header("location:?role=admin&mod=images");
}
function updateAction() {
    $id = $_GET['id'];
    $data['list_img_by_id'] = get_imgs_by_id($id);
    $data['list_products'] = get_list_product();
    load_view('update',$data);   
}
function updatePostAction() {
    $name = $_POST['name'];
    $file_name = $_FILES['fileUpload']['name'];
    $id = $_POST['id'];
    $file_tmp = $_FILES['fileUpload']['tmp_name'];
    if(empty($file_name)) {
        $file_name = $_POST['img_current'];
    }else {
        move_uploaded_file($file_tmp, 'public/uploads/' . $file_name);
    }
    update_images($id,$name,$file_name);
    push_notification("success",['Cập nhập ảnh thành công']);
    header("location:?role=admin&mod=images");
}
function deleteAction(){ 
    $id = $_GET['id'];
    delete_images($id);
    push_notification('success',['Xóa ảnh sản phẩm thành công']);
    header("location:?role=admin&mod=images");
}