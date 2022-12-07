<?php get_header('', 'Thống kê sản phẩm'); ?>

<div class="content-main">
    <h3 class="title-content">Thống Kê Sản Phẩm</h3>
    <div class="list-product">
        <h4 class="list">Danh sách Thống kê</h4>
        <div class="search-product">
            <!-- <a href=""><img src="/public/images/Search.png" alt=""></a> -->
            <!-- <input type="text" placeholder="Aspen Weste..."> -->
            <a href="?role=admin&mod=thongke&action=bieudo"><button class="btn btn-success">Biểu đồ thống kê</button></a>
        </div>
    </div>
    <table class="table-bordered table">
        <thead class="table-dark">
            <tr>
                <th>Id_cate</th>
                <th>Danh mục</th>
                <th>Số lượng</th>
                <th>Giá trị cao nhất</th>
                <th>Giá trị thấp nhất</th>
                <th>Giá trị trung bình</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list_thong_ke as $values) : ?>
                <tr>
                    <td><?php echo $values['id_cate']  ?></td>
                    <td><?php echo $values['name_cate'] ?></td>
                    <td><?php echo $values['count_products'] ?></td>
                    <td><?php echo number_format($values['max_product']) . "đ" ?></td>
                    <td><?php echo number_format($values['min_product']) . "đ" ?></td>
                    <td><?php echo number_format($values['avg_product']) . "đ" ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
</article>
</div>
<div class="clear-both"></div>
<?php get_footer('', 'Thống kê sản phẩm') ?>