<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $data['home_collection'] = get_list_best_selling();
    $data['home_cate_parent'] = get_list_cate_parent();
    load_view('index',$data);
}


?>