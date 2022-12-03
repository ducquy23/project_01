<?php get_header('', 'Tạo mới thương hiệu sản phẩm') ?>

<div class="content-main">
    <h3>Thêm mới Cata</h3>
    <form action="?role=admin&mod=brands&action=create" class="container" method="POST">
        <div class="form-group">
            <label for="name">Tên thương hiệu:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter brands" id="name">
        </div>
        <div class="form-submit">
            <button type="submit" class="btn btn-success" name="submit">Add Cata</button>
        </div>
    </form>
</div>
</article>
</div>

<div class="clear-both"></div>
<?php get_footer() ?>