<?php get_header('', 'Đơn hàng');

?>

<div class="content-main">
    <h3 class="title-content">Quản lý đơn hàng</h3>
    <div class="list-product">
        <h4 class="list">Danh sách đơn hàng</h4>
        <div class="search-product">
            <!-- <a href="?role=admin&mod=orders&action=create"><button class="btn btn-success">Add New Orders</button></a> -->
        </div>
    </div>
    <table class="table-bordered table">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Orderer Fullname</th>
                <th>Email</th>
                <th>Address</th>
                <th>Order_date</th>
                <th>Status</th>
                <th>Phone number</th>
                <th>Amount</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $values) : ?>
                <tr>
                    <td><?php echo $values['id'] ?></td>
                    <td><?php echo $values['fullname'] ?></td>
                    <td><?php echo $values['email']  ?></td>
                    <td><?php echo $values['address']  ?></td>
                    <td><?php echo $values['order_date']  ?></td>

                    <td><?php if ($values['status'] == 0) {
                            echo 'Đơn đã giao';
                        } elseif ($values['status'] == 1) {
                            echo 'Đơn đang vận chuyển';
                        } else {
                            echo 'Đơn bị hủy';
                        } ?></td>

                    <td style=""><?php echo $values['phone'] ?></td>
                    <td><?php echo $values['amount'] ?></td>
                    <td style="width: 200px;text-align: center;">
                        <!-- <a href="?role=admin&mod=orders&action=update&id=<?php echo $values['id'] ?>"><button class="btn btn-success">Update</button></a> -->
                        <a href="?role=admin&mod=orders&action=delete&id=<?php echo $values['id'] ?>" onclick="return confirm('Bạn có muốn xóa không')"><button class="btn btn-danger" style="margin-top: 10px;">Delete</button></a>
                    </td>

                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</article>
</div>
<div class="clear-both"></div>
<?php get_footer(); ?>