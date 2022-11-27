<?php 
function construct() {
    load_model('index');
}
function indexAction() {
    $data['home_list_cate_football'] = get_list_categories_football();
    $data['home_list_cate_shoes'] = get_list_categories_shoes();
    load_view('index',$data);

}
