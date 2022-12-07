<?php
function get_list_product_shoes() {
    $result = db_fetch_array("SELECT * FROM `products` WHERE categories_id = 5 LIMIT 8");
    return $result;
}
function get_list_product_football() {
    $result = db_fetch_array("SELECT * FROM `products` WHERE categories_id = 20 LIMIT 8");
    return $result;
}
function get_list_product_special() {
    $result = db_fetch_array("SELECT * FROM `products` WHERE special = 1");
    return $result;
}
function get_list_categories_football() {
    $result = db_fetch_array("SELECT * FROM `categories` WHERE parent_id = 1");
    return $result;
}
function get_list_categories_shoes() {
    $result = db_fetch_array("SELECT * FROM `categories` WHERE parent_id = 25");
    return $result;
}
function get_list_product_by_id_cate_football($id) {
    $result = db_fetch_array("SELECT * FROM `products` WHERE categories_id = $id");
    return $result;
}
function get_list_product_by_id_cate_shoes($id) {
    $result = db_fetch_array("SELECT * FROM `products` WHERE categories_id = $id");
    return $result;
}


