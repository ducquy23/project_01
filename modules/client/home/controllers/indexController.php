<?php
function construct() {
    load_model('index');
}

function indexAction() {
    $data['home_cate_shoes'] = get_list_product_shoes();
    $data['home_cate_football'] = get_list_product_football();
    $data['home_product_special'] = get_list_product_special();
    $data['home_list_cate_football'] = get_list_categories_football();
    $data['home_list_cate_shoes'] = get_list_categories_shoes();
    load_view('index',$data);
}

