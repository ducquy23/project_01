<?php get_header('', 'Tạo mới sản phẩm') ?>
<div class="content-main">
    <h3>Thêm mới Product</h3>
    <form action="?role=admin&mod=production&action=create" enctype="multipart/form-data" class="container" method="POST">
        <div class="form-group">
            <label for="name">Title Product:</label>
            <input type="text" name="title" class="form-control" placeholder="Enter Name" id="name">
        </div>
        <div class="form-group">
            <label for="price">Price Product:</label>
            <input type="text" name="price" class="form-control" placeholder="Enter price" id="price">
        </div>
        <div class="form-group">
            <label for="special">Product Special:</label>
            <select name="special" id="" class="form-control">
                <option value="0">Không đặc biệt</option>
                <option value="1">Đặc biệt</option>
            </select>
        </div>
        <div class="form-group">
            <label for="type">Danh mục Product:</label>
            <select name="type" id="" class="form-control">
                <?php foreach ($list_categories as $values) : ?>
                    <option value="<?php echo $values['id']  ?>"><?php echo $values['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="type">Thương hiệu Product:</label>
            <select name="brand" id="" class="form-control">
                <?php foreach ($list_brands as $values) : ?>
                    <option value="<?php echo $values['id']  ?>"><?php echo $values['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="img">Ảnh sản phẩm</label> <br>
            <input type="file" name="fileUpload">
        </div>
        <div class="form-group">
            <label for="desc">Mô tả Product:</label><br>
            <textarea placeholder="Nhập mô tả sản phẩm ở đây" name="desc" id="" cols="30" rows="5" style="width: 1105px;" class="form-control"></textarea>
        </div>
        <div class="form-submit">
            <button type="submit" class="btn btn-success" name="submit">Add Product</button>
        </div>
    </form>
</div>
</div>

<div class="clear-both"></div>
<?php get_footer() ?>