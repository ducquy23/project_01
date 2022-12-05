<?php get_header();
$count = 0;
foreach ($list_product as $values) {
    $count += $values['quantity'];
}
?>
<div class="content-main">
    <h3 class="title-content">Chi tiết đơn hàng</h3>
    <div class="list-product">
        <h4 class="list">Chi tiết đơn hàng đơn hàng</h4>
        <div class="back">
            <a href="?role=admin&mod=orders" class="back-link"><i class='bx bx-arrow-back'></i></a>
            <a href="?role=admin&mod=orders" class="back-link"><span>Back</span></a>
        </div>
    </div>
    <div class="detail-order">
        <div class="detail-order__header">
            <p>Chi tiết đơn hàng</p>
        </div>
        <div class="detail-order__body">
            <div class="detail-order__info-user">
                <div class="detail-order__name-user"><b>Người nhận:</b><span> <?php echo $list_products_detail['fullname']; ?></span> </div>
                <div class="detail-order__phone"><b>Điện thoại:</b><span> <?php echo "0" . $list_products_detail['phone'] ?></span></div>
                <div class="detail-order__address"><b>Địa chỉ:</b><span> <?php echo $list_products_detail['address'] ?></span></div>
            </div>
            <div class="detail-order__info-product">
                <h5>Danh sách sản phẩm</h5>
                <?php foreach ($list_product as $values) : ?>
                    <div class="detail-order__list-product">
                     - <?php echo $values['title'] ?> - <b>Số lượng:</b> <?php echo $values['quantity'] ?> sản phẩm - <b>giá :</b> <?php echo number_format($values['price']) . "đ" ?> 
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="detail-order__total">
                <b>Tổng số lượng :</b> <?php echo $count ?> <br> <b>Tổng tiền:</b> <?php echo number_format($list_products_detail['amount']) . "đ" ?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>