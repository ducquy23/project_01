<?php get_header('', 'Danh mục sản phẩm');?>
<div class="content-main">
    <h3 class="title-content">Quản lý thương hiệu</h3>
    <div class="list-product">
        <h4 class="list">Danh sách thương hiệu</h4>
       
        <div class="search-product">
            <a href="?role=admin&mod=brands&action=create"><button class="btn btn-success">Add New Cata</button></a>
        </div>
    </div>

    <table class="table-bordered table">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Brands Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($brands as $values) : ?>
                <tr>
                    <td><?php echo $values['id'] ?></td>
                    <td><?php echo $values['name'] ?></td>
                    <td style="width: 300px;text-align: center;">
                        <a href="?role=admin&mod=brands&action=update&id=<?php echo $values['id'] ?>"><button class="btn btn-success">Update</button></a>
                        <a href="?role=admin&mod=brands&action=delete&id=<?php echo $values['id'] ?>" onclick="return confirm('Bạn có muốn xóa không')"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</article>
</div>
<div class="clear-both"></div>
<?php get_footer('', 'Danh mục sản phẩm') ?>