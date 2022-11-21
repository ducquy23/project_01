<?php
function construct() {
    load_model('index');
}

function indexAction() {
    $data['home_cate_shoes'] = get_list_product();
    load_view('index',$data);
}
