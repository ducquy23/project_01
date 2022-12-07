<?php get_header('', 'Tạo mới ảnh sản phẩm') ?>

<div class="content-main">
    <h3>Thêm mới Images</h3>
    <form action="?role=admin&mod=images&action=create" class="container" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Tên Sản phẩm:</label>
            <select name="name" id="" class="form-control">
                <?php foreach($list_products as $values) : ?>
                <option value="<?php echo $values['id'] ?>"><?php echo $values['title'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">    
            <label for="img">Nhập ảnh:</label><br>
            <input type="file" name="fileUpload" id="img">
        </div>
        <div class="form-submit">
            <button type="submit" class="btn btn-success" name="submit">Add Images</button>
        </div>
    </form>
</div>
</article>
</div>

<div class="clear-both"></div>
<?php get_footer() ?>