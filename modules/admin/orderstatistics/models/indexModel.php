<?php
function get_status_0() { // trạng thái đang xử lý
    $result = db_fetch_row("SELECT COUNT(status) as 'total_order',SUM(amount) as 'amount' FROM `orders` WHERE status = 0");
    return $result;
}
function get_status_1() { // trạng thái đang giao hàng
    $result = db_fetch_row("SELECT COUNT(status) as 'total_order',SUM(amount) as 'amount' FROM `orders` WHERE status = 1");
    return $result;
}
function get_status_2() { // trạng thái giao thành công
    $result = db_fetch_row("SELECT COUNT(status) as 'total_order',SUM(amount) as 'amount' FROM `orders` WHERE status = 2");
    return $result;
}
function get_status_3() { // trạng thái hủy đơn
    $result = db_fetch_row("SELECT COUNT(status) as 'total_order',SUM(amount) as 'amount' FROM `orders` WHERE status = 3");
    return $result;
}
?>