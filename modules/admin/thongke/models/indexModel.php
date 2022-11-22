<?php

function get_list_thongke() {
    $result = db_fetch_array("SELECT * FROM `products`");
    return $result;
}

?>