<?php
function get_list_categories_football() {
    $result = db_fetch_array("SELECT * FROM `categories` WHERE parent_id = 1");
    return $result;
}
function get_list_categories_shoes() {
    $result = db_fetch_array("SELECT * FROM `categories` WHERE parent_id = 25");
    return $result;
}

function get_list_product_by_id_Cate($id) {
    $result = db_fetch_array("SELECT * FROM `products` WHERE categories_id = '$id'");
    return $result;
}
function get_parent_categories($id) {
    $result = db_fetch_row("SELECT * FROM `categories` WHERE id = '$id'");
    return $result;
}
function get_categories($id) {
    $result = db_fetch_row("SELECT * FROM `categories` WHERE id = '$id'");
    return $result;
}
function get_all_categories_by_parent_id($id) {
    $result = db_fetch_array("SELECT * FROM `categories` WHERE parent_id = '$id'");
    return $result;
}