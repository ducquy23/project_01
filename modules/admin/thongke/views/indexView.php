<?php get_header('', 'Thống kê sản phẩm');?>

<div class="content-main">
    <h3 class="title-content">Thống Kê Sản Phẩm</h3>
    <div class="list-product">
        <h4 class="list">Danh sách Thông kê</h4>
        <div class="search-product">
            <!-- <a href=""><img src="/public/images/Search.png" alt=""></a> -->
            <!-- <input type="text" placeholder="Aspen Weste..."> -->
            <a href="?ctr=bieu_do"><button class="btn btn-success">Biểu đồ thống kê</button></a>
        </div>
    </div>
    <table class="table-bordered table">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Loại hàng</th>
                <th>Số lượng</th>
                <th>Giá trị cao nhất</th>
                <th>Giá trị thấp nhất</th>
                <th>Giá trị trung bình</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $values) : ?>
                <tr>
                    <td><?php echo $values['id_cate'] ?></td>
                    <td><?php echo $values['name_cate'] ?></td>
                    <td><?php echo $values['countProduct'] ?></td>
                    <td><?php echo $values['minProduct'] ?></td>
                    <td><?php echo $values['maxProduct'] ?></td>
                    <td><?php echo $values['avgProduct'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
</article>
</div>
<div class="clear-both"></div>
<?php get_footer('', 'Thống kê sản phẩm') ?>
