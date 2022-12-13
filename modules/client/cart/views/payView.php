<?php get_header('');
$notification = get_notification();
?>
<div class="container-pay">
    <div class="container-pay__info">
        <h3 class="container-pay__heading">
            THÔNG TIN GIAO HÀNG
        </h3>
        <?php foreach ($notification as $notification) : ?>
            <?php foreach ($notification['msgs'] as $msgs) : ?>
                <div class="notification container">
                    <h3 class="alert alert-<?php echo $notification['type'] ?> text-center" role="alert"><?php echo $msgs ?></h3>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
        <form action="?role=client&mod=cart&action=orders" class="container" method="POST">
            <div class="form-group">
                <label for="">Họ Và Tên:</label>
                <input type="text" class="form-control" name="fullname" placeholder="Enter Fullname" id="email">
            </div>
            <div class="form-group">
                <label for="">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email" id="pwd">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại:</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter Phone" id="pwd">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ:</label>
                <input type="text" class="form-control" name="address" placeholder="Enter Address" id="pwd">
            </div>
            <div class="container-pay__order">
                <h3>THÔNG TIN ĐƠN HÀNG</h3>
            </div>
            <div class="container-pay__order">
                <table class="container-pay__table">
                    <!-- <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                        </tr>
                    </thead> -->
                    <tbody>
                        <?php foreach ($cart['buy'] as $values) : ?>
                            <tr>
                                <td>
                                    <img src="/public/uploads/<?php echo $values['thumbnail'] ?>" alt="" class="container-pay__img">
                                    <p class="container-pay__title"><?php echo $values['title'] ?></p>
                                    <span class="container-pay__quantity"><?php echo $values['quantity'] ?></span>
                                </td>
                                <td>
                                    <p class="container-pay__price">
                                        <?php echo number_format($values['price'] * $values['quantity']) ?> <sup><u>đ</u></sup>
                                    </p>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="container-pay__total">
                    <h3>TỔNG TIỀN : <span><?php echo number_format($total) ?> <sup>đ</sup></span></h3>

                </div>
            </div>

            <button type="submit" class="btn btn-success">ĐẶT HÀNG</button>
        </form>
    </div>

</div>
<?php get_footer(''); ?>