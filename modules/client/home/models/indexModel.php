<?php
function get_list_product_special()
{
    $result = db_fetch_array("SELECT * FROM `products` WHERE special = 1");
    return $result;
}
function get_list_product($item_per_page, $offset)
{
    $result = db_fetch_array("SELECT * FROM `products` LIMIT {$item_per_page} OFFSET {$offset}");
    return $result;
}
function get_list_categories()
{
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}
function get_list_brand()
{
    $result = db_fetch_array("SELECT * FROM `brands`");
    return $result;
}
function get_product_by_category_id($id)
{
    $result = db_fetch_array("SELECT * FROM `products` WHERE categories_id = $id");
    return $result;
}
function get_product_by_brand_id($id)
{
    $result = db_fetch_array("SELECT * FROM `products` WHERE brands_id = $id");
    return $result;
}
function get_totalRecord()
{
    $result = db_num_rows("SELECT * FROM products");
    return $result;
}
function get_product_by_name($name)
{
    $result = db_fetch_array("SELECT * FROM products WHERE title LIKE '%$name%'");
    return $result;
}
function get_product_outstanding() {
    $result = db_fetch_array("SELECT * FROM products ORDER BY views DESC LIMIT 8");
    return $result;
}
