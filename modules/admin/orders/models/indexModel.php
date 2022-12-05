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
