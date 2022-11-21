<?php get_header('', 'Danh mục sản phẩm');?>
<div class="content-main">
    <h3 class="title-content">Quản lý Danh mục</h3>
    <div class="list-product">
        <h4 class="list">Danh sách danh mục</h4>
       
        <div class="search-product">
            <a href="?role=admin&mod=category&action=create"><button class="btn btn-success">Add New Cata</button></a>
        </div>
    </div>

    <table class="table-bordered table">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Cata Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $values) : ?>
                <tr>
                    <td><?php echo $values['id'] ?></td>
                    <td><?php echo $values['name'] ?></td>
                    <td style="width: 300px;text-align: center;">
                        <a href="?role=admin&mod=category&action=update&id=<?php echo $values['id'] ?>"><button class="btn btn-success">Update</button></a>
                        <a href="?role=admin&mod=category&action=delete&id=<?php echo $values['id'] ?>" onclick="return confirm('Bạn có muốn xóa không')"><button class="btn btn-danger">Delete</button></a>
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