<?php 
function get_product_by_id($id) {
    $result = db_fetch_row("SELECT * FROM products WHERE id = {$id}");
    return $result;
}
function get_total_cart() {
    if(isset($_SESSION['cart'])) {
        return $_SESSION['cart']['infor']['total'];
    }
    return FALSE;
}
function update_info_cart() {
    $num_order = 0;
    $total = 0;
    foreach ($_SESSION['cart']['buy'] as $item) {
        $num_order += $item['quantity'];
        $total += $item['sub_total'];
    }
    $_SESSION['cart']['infor'] = array(
        'num_order' => $num_order,
        'total' => $total
    );
}
function update_cart($quantity) {
    foreach ($quantity as $id => $new_quantity) {
        $quantity = $_SESSION['cart']['buy'][$id]['quantity'] = $new_quantity;
        $_SESSION['cart']['buy'][$id]['sub_total'] = $new_quantity * $_SESSION['cart']['buy'][$id]['price'];
    }
    update_info_cart();
}
?>