<?php 
function get_product_by_id($id) {
    $result = db_fetch_row("SELECT * FROM products WHERE id = $id");
    return $result;
}
function get_product_by_category($id) { 
    $result = db_fetch_array("SELECT * FROM products WHERE categories_id = $id");
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
