<?php
function construct() {
    load_model('index');
}
function indexAction () {
    $data['status_0'] = get_status_0();
    $data['status_1'] = get_status_1();
    $data['status_2'] = get_status_2();
    $data['status_3'] = get_status_3();
    load_view('index',$data);
}

?>