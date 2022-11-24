<?php
function get_list_categories_football() {
    $result = db_fetch_array("SELECT * FROM `categories` WHERE parent_id = 1");
    return $result;
}
function get_list_categories_shoes() {
    $result = db_fetch_array("SELECT * FROM `categories` WHERE parent_id = 4");
    return $result;
}
function get_list_best_selling() {
    $result = db_fetch_array("SELECT * FROM `products`");
    return $result;
}
function get_list_product_by_id_Cate($id) {
    $result = db_fetch_array("SELECT * FROM `products` WHERE categories_id = '$id'");
    return $result;
}
