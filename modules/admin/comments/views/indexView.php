<?php get_header('', 'Bình luận') ?>
<div class="content-main">
    <h3 class="title-content">Quản lý Bình luận</h3>
    <div class="list-product">
        <h4 class="list">Danh sách bình luận</h4>
        <div class="search-product">
            <!-- <a href="?ctr=add_cata"><button class="btn btn-success">Add New Comment</button></a> -->
        </div>
    </div>
    <table class="table-bordered table">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Content</th>
                <th>Product_id</th>
                <th>User_id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($comments as $values ): ?>
            <tr>
                <td><?php echo $values['id'] ?></td>
                <td><?php echo $values['content'] ?></td>
                <td><?php echo $values['product_id'] ?></td>
                <td><?php echo $values['users_id'] ?></td>
                <td style="text-align: center;">
                <a href="?role=admin&mod=category&action=delete&id=<?php echo $values['id'] ?>" onclick="return confirm('Bạn có muốn xóa không')"><button class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
</div>
</article>
</div>
<div class="clear-both"></div>
<?php get_footer() ?>