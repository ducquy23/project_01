<?php
function get_list_best_selling() {
    $result = db_fetch_array("SELECT * FROM `products`");
    return $result;
}

?>