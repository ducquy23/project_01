<?php
function get_list_product_special() {
    $result = db_fetch_array("SELECT * FROM `products` WHERE special = 1");
    return $result;
}
function get_list_product() {
    $result = db_fetch_array("SELECT * FROM `products` LIMIT 12");
    return $result;
}
function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}
function get_list_brand() {
    $result = db_fetch_array("SELECT * FROM `brands`");
    return $result;
}
function get_product_by_category_id($id) {
    $result = db_fetch_array("SELECT * FROM `products` WHERE categories_id = $id");
    return $result;
}
function get_product_by_brand_id($id) {
    $result = db_fetch_array("SELECT * FROM `products` WHERE brands_id = $id");
    return $result;
}


