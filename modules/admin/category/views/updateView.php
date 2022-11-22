<?php get_header('', 'Chỉnh sửa danh mục sản phẩm') ?>

<div class="content-main">
    <h3>Update Catagories</h3>
    <form action="?role=admin&mod=category&action=update" enctype="multipart/form-data" class="container" method="POST">
        <div class="form-group">
            <label for="name">Tên catagories:</label>
            <input type="text" name="cata_name" class="form-control" placeholder="Enter Catagories" id="name" value="">
            <input type="hidden" name="id" value="">
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