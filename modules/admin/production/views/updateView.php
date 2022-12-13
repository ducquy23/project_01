<?php get_header('', 'Chỉnh sửa sản phẩm');

// echo $data_update_production['product_id'];
?>

<div class="content-main">
    <h3>Cập nhập Product</h3>
    <form action="?role=admin&mod=production&action=update" enctype="multipart/form-data" class="container" method="POST">
        <div class="form-group">
            <label for="name">Tên Product:</label>
            <input type="text" name="title" class="form-control" placeholder="Enter Name" id="name" value="<?php echo $data_update_production['title']  ?>">
        </div>
        <input type="hidden" value="<?php echo $data_update_production['product_id'] ?>" name="product_id">
        <div class="form-group">
            <label for="price">Giá Product:</label>
            <input type="text" name="price" class="form-control" placeholder="Enter price" id="price" value="<?php echo $data_update_production['price']  ?>">
        </div>
        <div class="form-group">
            <label for="special">Sản phẩm đặc biệt:</label>
            <select name="special" id="" class="form-control">
                <option value="<?php echo $data_update_production['product_id'] ?>" hidden>
                    <?php echo ($data_update_production['special'] == 1) ? "Đặc biệt" : "Không đặc biệt" ?>
                </option>
                <option value="0">Không đặc biệt</option>
                <option value="1">Đặc biệt</option>
            </select>
        </div>
        <div class="form-group">
            <label for="type">Danh mục Product:</label>
            <select name="categories" id="" class="form-control">
                <option value="<?php echo $data_update_production['categories_id'] ?>" hidden>
                    <?php
                    echo $data_update_production['name_cate'];
                    ?>
                </option>
                <?php foreach ($all_categories as $values) : ?>
                    <option value="<?php echo $values['id'] ?>">
                        <?php echo $values['name']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="type">Thương hiệu Product:</label>
            <select name="brands" id="" class="form-control">
                <option value="<?php echo $data_update_production['brands_id'] ?>" hidden>
                    <?php
                    echo $data_update_production['name_brand'];
                    ?>
                    <?php ?>
                </option>
                <?php foreach ($all_brands as $values) : ?>
                    <option value="<?php echo $values['id'] ?>">
                        <?php echo $values['name']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="img">Ảnh sản phẩm</label> <br>
            <td><img style="width: 100px;height: 100px;" src="/public/uploads/<?php echo $data_update_production['thumbnail'] ?> " alt=""></td>
            <input type="hidden" name="name_image" value="<?php echo $data_update_production['thumbnail']  ?>">
            <input type="file" name="img" id="img">
            <input type="hidden" name="id" value="<?php  ?>">
        </div>
        <div class="form-group">
            <label for="desc">Mô tả Product:</label><br>
            <textarea name="productDesc" id="" cols="30" rows="5" style="width: 1105px;" class="form-control"><?php echo $data_update_production['description'] ?></textarea>
        </div>
        <div class="form-submit">
            <button style="margin: 20px 0;" type="submit" class="btn btn-success" name="submit">Update Product</button>
        </div>
    </form>
</div>
</article>
</div>

<div class="clear-both"></div>
<?php get_footer() ?>