<?php
function construct() {
    load_model('index');
}

function indexAction() {
    $id = $_GET['id'];
    $id_cate = $_GET['id_cate'];
    $data['info_detail_product'] = get_product_by_id($id);
    $data['list_categories_related'] = get_product_by_category($id_cate);
    $data['home_list_cate_football'] = get_list_categories_football();
    $data['home_list_cate_shoes'] = get_list_categories_shoes();
    load_view('index',$data);
}

?>