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
    load_view('index');
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
function indexPostAction()
{
    // show_array($_POST['quantity']);
    update_cart($_POST['quantity']);
    header("location:?role=client&mod=cart");
}
function payAction()
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
        load_view('pay', $data);
    }
    if (isset($_SESSION['cart'])) {
        $data['cart'] = $_SESSION['cart'];
        $total = get_total_cart();
        $data['total'] = $total;
    }
    load_view('pay', $data);
}
function ordersPostAction()
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    if (empty($fullname) || empty($email) || empty($phone) || empty($address)) {
        push_notification("danger", ["Vui lòng không bỏ trống"]);
        header("location:?role=client&mod=cart&action=pay");
        die();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        push_notification("danger", ["Vui lòng nhập đúng định dạng email"]);
        header("location:?role=client&mod=cart&action=pay");
        die();
    }
    if(!is_numeric($phone) && !empty($phone)) {
        push_notification("danger", ["Vui lòng nhập số cho sdt"]);
        header("location:?role=client&mod=cart&action=pay");
        die();
    }
    if(isset($_SESSION['cart'])) {
        $amount = $_SESSION['cart']['infor']['total'];
        $order_date = date("h:i:s - d/m/Y");
        insert_order($fullname,$email,$address,$phone,$amount,$order_date);
        $order = get_id_order();
        foreach($_SESSION['cart']['buy'] as $values) {
            insert_order_detail($values['price'],$values['quantity'],$values['sub_total'],$values['id'],$order['id']);
        }
        unset($_SESSION['cart']);
        push_notification("success",["Đặt hàng thành công"]);
        header("location:?role=client&mod=cart");
    }
}
