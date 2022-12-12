<?php
function construct() {
    load_model('index');
}

function indexAction() {
    $data['list_thong_ke'] = get_list_thongke();
    load_view('index', $data);
}
function bieudoAction() {
    $data['list_thong_ke'] = get_list_thongke();
    load_view('bieudo',$data);
 }
?>
