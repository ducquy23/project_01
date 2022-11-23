<?php
function get_list_product_shoes() {
    $result = db_fetch_array("SELECT * FROM `products` WHERE categories_id = 5 LIMIT 8");
    return $result;
}
function get_list_product_football() {
    $result = db_fetch_array("SELECT * FROM `products` WHERE categories_id = 28 LIMIT 8");
    return $result;
}
function get_list_product_special() {
    $result = db_fetch_array("SELECT * FROM `products` WHERE special = 1");
    return $result;
}
function get_list_categories_football() {
    $result = db_fetch_array("SELECT * FROM `categories` WHERE parent_id = 31");
    return $result;
}
function get_list_categories_shoes() {
    $result = db_fetch_array("SELECT * FROM `categories` WHERE parent_id = 32");
    return $result;
}


