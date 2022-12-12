<?php
function construct()
{
    load_model('index');
}

function indexAction()
{
    if (isset($_GET['id_img'])) {
        $id_img = $_GET['id_img'];
        $img = get_img_by_id($id_img);
        $id = $_GET['id'];
        $id_cate = $_GET['id_cate'];
        $data['info_detail_product'] = get_product_by_id($id);
        $data['info_detail_product']['thumbnail'] = $img['thumbnail'];
        $data['list_categories_related'] = get_product_by_category($id_cate);
        $data['list_img'] = get_list_img_by_id($id);
        load_view('index', $data);
    } else {
        $id = $_GET['id'];
        $id_cate = $_GET['id_cate'];
        $data['info_detail_product'] = get_product_by_id($id);
        $data['list_categories_related'] = get_product_by_category($id_cate);
        $data['list_img'] = get_list_img_by_id($id);
        load_view('index', $data);
    }
}
function commentPostAction()
{
    $content = $_POST['content'];
    $id_prd = $_POST['id_prd'];
    $id_user = $_POST['id_user'];
    $comment_date = date('d/m/Y');
    insert_comment($content, $id_prd, $id_user, $comment_date);
    header("location:" . $_SERVER['HTTP_REFERER']);
}
function view_commentPostAction()
{
    $id_prd = isset($_REQUEST['id_prd']) ? $_REQUEST['id_prd'] : "";
    if (isset($_SESSION['user'])) {
        $data['list_comment'] = get_list_comment($id_prd);
    } else {
        $data['list_comment'] = get_list_comment($id_prd);
    }
    load_view('view_comment', $data);
}
