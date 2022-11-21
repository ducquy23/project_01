<?php
function construct() {
    load_model('index');
}

function indexAction() {
    $data['home_cate_shoes'] = get_list_product();
    $data['home_cate_parent'] = get_list_cate_parent();
    load_view('index',$data);
}
