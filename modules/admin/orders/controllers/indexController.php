<?php 

function construct()
{
    request_auth();
    load_model('index');
}
function indexAction()
{
    $data['orders'] = get_list_orders();
    load_view('index', $data);
}
?> 