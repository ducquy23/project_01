<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $data['home_collection'] = get_list_best_selling();
    load_view('index',$data);
}


?>