<?php
function get_list_product() {
    $result = db_fetch_array("SELECT * FROM `products`");
    return $result;
}


