<?php get_header('', 'Tạo mới danh mục sản phẩm') ?>

<div class="content-main">
    <h3>Thêm mới Cata</h3>
    <form action="?role=admin&mod=category&action=create" class="container" method="POST">
        <div class="form-group">
            <label for="name">Tên catagories:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Catagories" id="name">
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