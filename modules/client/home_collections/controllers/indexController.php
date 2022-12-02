<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $id = $_GET['id'];
    $parent_id = $_GET['parent_id'];
    $data['home_list_cate_football'] = get_list_categories_football();
    $data['home_list_cate_shoes'] = get_list_categories_shoes();
    $data['home_list_product_by_id_cate'] = get_list_product_by_id_Cate($id);
    $data['home_parent_category'] = get_parent_categories($parent_id); 
    $data['home_categories'] = get_categories($id);
    $data['categories_all_by_parent_id'] = get_all_categories_by_parent_id($parent_id);
    // show_array($home['categories_all_by_parent_id']);
    load_view('index',$data);
}


?>