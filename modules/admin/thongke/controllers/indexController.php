<?php
function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    $data['thongke'] = get_list_thongke();
    load_view('index', $data);
    
}
?>
