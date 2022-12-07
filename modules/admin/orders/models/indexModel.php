<?php
function get_list_orders()
{
    $result = db_fetch_array("SELECT * FROM `orders`");
    return $result;
}
function get_list_orders_details($id)
{
    $result = db_fetch_row("SELECT * FROM `order_details` INNER JOIN orders ON order_details.orders_id = orders.id WHERE orders.id = $id");
    return $result;
}
function get_list_product_orders($id)
{
    $result = db_fetch_array("SELECT * FROM order_details inner join products on products.id = order_details.products_id WHERE orders_id = $id");
    return $result;
}
function update_status_order($id, $status)
{
    db_update('orders', [
        'status' => $status
    ], "id = $id");
    return true;
}
function delete_order_detail($id) {
    db_delete('order_details', "orders_id = $id");
    return true;
}
function delete_order($id)
{
    db_delete('orders', "id = $id");
    return true;
}
