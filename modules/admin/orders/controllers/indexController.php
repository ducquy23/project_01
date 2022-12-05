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
function detailAction() {
    $id = $_GET['id'];
    $data['list_products_detail'] = get_list_orders_details($id);
    $data['list_product'] = get_list_product_orders($id);
    load_view('detail',$data);
    // show_array( $data['list_products_detail']);

}
?> 