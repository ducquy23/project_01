<?php
function construct()
{
    load_model('index');
}

function indexAction()
{
    $id = $_GET['id'];
    $id_cate = $_GET['id_cate'];
    $data['info_detail_product'] = get_product_by_id($id);
    $data['list_categories_related'] = get_product_by_category($id_cate);
    $data['home_list_cate_football'] = get_list_categories_football();
    $data['home_list_cate_shoes'] = get_list_categories_shoes();
    load_view('index', $data);
}
function commentPostAction()
{
    $content = $_POST['content'];
    $id_prd = $_POST['id_prd'];
    $id_user = $_POST['id_user'];
    $comment_date = date('h:i:s - d/m/Y');
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
