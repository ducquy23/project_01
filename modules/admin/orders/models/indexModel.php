<?php
function get_list_orders()
{
    $result = db_fetch_array("SELECT * FROM `orders`");
    return $result;
}
