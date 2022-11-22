<?php get_header('', 'Sản phẩm') ?>

<div class="content-main">
    <h3 class="title-content">Quản lý Sản phẩm</h3>
    <div class="list-product">
        <h4 class="list">Danh sách sản phẩm</h4>
        <div class="search-product">
            <a href="?role=admin&mod=production&action=create"><button class="btn btn-success">Add New Product</button></a>
        </div>
    </div>
    <table class="table-bordered table">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Product Title</th>
                <th>Product Price</th>
                <th>Discount</th>
                <th>Thumbnail</th>
                <th>Special</th>
                <th>Description</th>
                <th>Create at</th>
                <th>Update at</th>
                <th>Categories id</th>
                <th>Brands id</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($productions as $values) : ?>
                <tr>
                         <td><?php echo $values['id'] ?></td>
                         <td><?php echo $values['title'] ?></td>
                         <td><?php echo $values['price'] ?></td>
                         <td><?php echo $values['discount'] ?></td>
                         <td><img style="width: 100px;height: 100px;" src="/public/uploads/<?php echo $values['thumbnail'] ?>" alt="" ></td>
                         <td><?php echo $values['special'] ?></td>
                         <td><p style="overflow-y:scroll; height:110px;"><?php echo $values['description'] ?></p></td>
                         <td><?php echo $values['created_at'] ?></td>
                         <td><?php echo $values['update_at'] ?></td>
                         <td><?php echo $values['categories_id'] ?></td>
                         <td><?php echo $values['brands_id'] ?></td>
                         <td style="width: 200px;text-align: center;">
                        <a href="?role=admin&mod=production&action=update&id=<?php echo $values['id'] ?>"><button class="btn btn-success">Update</button></a>
                        <a href="?role=admin&mod=production&action=delete&id=<?php echo $values['id'] ?>" onclick="return confirm('Bạn có muốn xóa không')"><button class="btn btn-danger">Delete</button></a>
                    </td>

                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</article>
</div>
<div class="clear-both"></div>
<?php get_footer() ?>