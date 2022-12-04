<?php get_header('', 'Chỉnh sửa thương hiệu sản phẩm');?>
<div class="content-main">
    <h3>Update Brands</h3>
    <form action="?role=admin&mod=brands&action=update" enctype="multipart/form-data" class="container" method="POST">
        <div class="form-group">
            <label for="name">Tên thương hiệu:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Brands" id="name" value="<?php echo $data_update_brands['name'] ?>">
            <input type="hidden" name="id" value="<?php echo $data_update_brands['id'] ?>">
        </div>
        <div class="form-submit">
            <button type="submit" class="btn btn-success" name="submit">Update Brands</button>
        </div>
    </form>
</div>
</article>
</div>

<div class="clear-both"></div>
<?php get_footer() ?>