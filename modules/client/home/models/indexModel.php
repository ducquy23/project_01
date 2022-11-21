<?php
function get_list_product() {
    $result = db_fetch_array("SELECT * FROM `products`");
    return $result;
}
function get_list_cate_parent() {
    $result = db_fetch_array("SELECT * FROM `categories` where `parent_id` like '0'");
    return $result;
}


