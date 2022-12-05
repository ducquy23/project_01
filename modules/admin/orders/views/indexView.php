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
                <th>Fullname</th>
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
                    <td style="width: 100px;"><?php echo $values['order_date']  ?></td>

                    <td style="width: 200px;">
                    <select name="" id="" style="padding: 5px;">
                        <option value=""><?php echo ($values['status'] == 0) ? "Đặt hàng thành công" : "Đặt hàng thất bại" ?></option>  
                        <option value="">Đang giao hàng</option> 
                        <option value="">Đã giao hàng</option> 
                    </select>
                    
                    </td>
                    <td style=""><?php echo "0". $values['phone'] ?></td>
                    <td><?php echo number_format($values['amount']) . "đ" ?></td>
                    <td style="width: 120px;text-align: center;">
                        <a href="?role=admin&mod=orders&action=detail&id=<?php echo $values['id'] ?>"><button class="btn btn-info">Details </button></a>
                        <a href=""><button style="margin-top: 6px;" class="btn btn-success">Update</button></a>
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