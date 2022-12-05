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
                <th>Nội dung</th>
                <th>Tên sản phẩm</th>
                <th>Người bình luận</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($comments as $values ): ?>
            <tr>
                <td><?php echo $values['comment_id'] ?></td>
                <td><?php echo $values['content'] ?></td>
                <td><?php echo $values['title'] ?></td>
                <td><?php echo $values['fullname'] ?></td>
                <td style="text-align: center;">
                <a href="?role=admin&mod=comments&action=delete&id=<?php echo $values['comment_id'] ?>" onclick="return confirm('Bạn có muốn xóa không')"><button class="btn btn-danger">Delete</button></a>
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