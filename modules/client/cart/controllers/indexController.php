<?php
function construct()
{
    load_model('index');
}
function indexAction()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $product = get_product_by_id($id);
        // show_array($product);
        $quantity = 1; // mặc định số lượng là 1
        if (isset($_SESSION['cart']['buy']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
            $quantity = $_SESSION['cart']['buy'][$id]['quantity'] + 1;
        }
        $_SESSION['cart']['buy'][$id] = array(
            'id' => $product['id'],
            'thumbnail' => $product['thumbnail'],
            'title' => $product['title'],
            'price' => $product['price'],
            'quantity' => $quantity,
            'sub_total' => $product['price'] * $quantity
        );
        update_info_cart();
    }
    if (!empty($_SESSION['cart'])) {
        $data['cart'] = $_SESSION['cart'];
        $total = get_total_cart();
        $data['total'] = $total;
        load_view('index', $data);
    }
}
function deleteAction()
{
    if (isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        if (!empty($id)) {
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        }
    }
    header("location:?role=client&mod=cart");
}
function indexPostAction() {
    // show_array($_POST['quantity']);
    update_cart($_POST['quantity']);
    header("location:?role=client&mod=cart");
}
function payAction()
{
    load_view('pay');
}
