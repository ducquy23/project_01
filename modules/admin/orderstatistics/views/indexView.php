<?php get_header('') ?>
<div class="content-main">
    <h3 class="title-content">Thống kê đơn hàng</h3>
</div>
<div class="list-product">
        <h4 class="list">Danh sách Thống kê</h4>
        <div class="search-product">
            <!-- <a href=""><img src="/public/images/Search.png" alt=""></a> -->
            <!-- <input type="text" placeholder="Aspen Weste..."> -->
            <!-- <a href="?role=admin&mod=thongke&action=bieudo"><button class="btn btn-success">Biểu đồ thống kê</button></a> -->
        </div>
    </div>
<div class="box-thongke">
    <div class="box-item" style="background-color:#32B7F3 ;">
        <h4 class="box-item__heading">Đang xử lý</h4>
        <p>Tổng đơn hàng: <?php echo $status_0['total_order'] ?></p>
        <p>Tổng tiền: <?php echo number_format($status_0['amount']) . "đ" ?></p>
    </div>
    <div class="box-item" style="background-color: #49A6F1;">
        <h4 class="box-item__heading">Đang giao hàng</h4>
        <p>Tổng đơn hàng: <?php echo $status_1['total_order'] ?></p>
        <p>Tổng tiền: <?php echo number_format($status_1['amount']) . "đ" ?></p>
    </div>
    <div class="box-item" style="background-color: #6BBB6E;">   
        <h4 class="box-item__heading">Giao hàng thành công</h4>
        <p>Tổng đơn hàng: <?php echo $status_2['total_order'] ?></p>
        <p>Tổng tiền: <?php echo number_format($status_2['amount']) . "đ" ?></p>
    </div>
    <div class="box-item" style="background-color: #DC3545 ;">
        <h4 class="box-item__heading">Hủy đơn hàng</h4>
        <p>Số đơn hủy: <?php echo $status_3['total_order'] ?></p>
    </div>
</div>
<?php get_footer('') ?>