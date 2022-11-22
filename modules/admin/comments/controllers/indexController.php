<?php
function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    $data['comments'] = get_list_comments();
    load_view('index', $data);
    
}
?>