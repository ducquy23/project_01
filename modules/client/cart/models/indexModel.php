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
function insert_order ($fullname,$email,$address,$phone,$amount,$order_date) {
    $id = db_insert('orders',
    ['fullname' => $fullname,
    'email' => $email,
    'address' => $address,
    'phone' => $phone,
    'amount' => $amount,
    'order_date' => $order_date
    ]);
    return $id;
}
function insert_order_detail ($price,$quantity,$sub_total,$product_id,$orders_id) {
    $id = db_insert('order_details',[
    'price' => $price,
    'quantity' => $quantity,
    'total' => $sub_total,
    'products_id' => $product_id,
    'orders_id' => $orders_id
    ]);
    return $id;
}
function get_id_order() {
    $result = db_fetch_row("SELECT id from orders ORDER BY id DESC LIMIT 1");
    return $result;
}
