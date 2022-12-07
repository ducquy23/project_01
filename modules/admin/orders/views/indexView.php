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
        <thead class="table-dark" style="text-align: center;">
            <tr>
                <th>#</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Address</th>
                <th>Order_date</th>
                <th>Status</th>
                <th>Update Status</th>
                <th>Phone number</th>
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
                    <form action="?role=admin&mod=orders&action=status_order&id=<?php echo $values['id'] ?>" method="POST">
                        <td style="width: 230px;">
                            <?php if ($values['status'] == 0) { ?>
                                <div class="alert alert-info" style="font-weight: bold;font-size:14px ;">Đang xử lý</div>
                            <?php  } else if ($values['status'] == 1) { ?>
                                <div class="alert alert-primary" style="font-weight: bold;font-size:14px ;">Đang giao hàng</div>
                            <?php  } else if ($values['status'] == 2) { ?>
                                <div class="alert alert-success" style="font-weight: bold;font-size:14px ;">Giao hàng thành công</div>
                            <?php  } else { ?>
                                <div class="alert alert-danger" style="font-weight: bold;font-size:14px ;">Hủy đơn</div>
                            <?php } ?>
                        </td>
                        <td>
                            <select name="status" id="" style="padding: 5px;">
                                <option value="0">Đang xử lý</option>
                                <option value="1">Đang giao hàng</option>
                                <option value="2">Giao hàng thành công</option>
                                <option value="3">Hủy đơn hàng</option>
                            </select>
                        </td>
                        <td style=""><?php echo "0" . $values['phone'] ?></td>

                        <td style="width: 120px;text-align: center;">
                            <a href="?role=admin&mod=orders&action=detail&id=<?php echo $values['id'] ?>">
                                <div class="btn btn-info">Details </div>
                            </a>
                            <a href=""><button style="margin-top: 6px;" class="btn btn-success" type="submit">Update</button></a>
                    </form>
                    <a href="?role=admin&mod=orders&action=delete&id=<?php echo $values['id'] ?>" onclick="return confirm('Bạn có muốn xóa không')">
                        <div class="btn btn-danger" style="margin-top: 10px;">Delete</div>
                    </a>
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