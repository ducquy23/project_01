<?php get_header('', 'Chỉnh sửa sản phẩm') ?>

<div class="content-main">
    <h3>Cập nhập Product</h3>
    <form action="index?ctr=save_update_product" enctype="multipart/form-data" class="container" method="POST">
        <div class="form-group">
            <label for="name">Tên Product:</label>
            <input type="text" name="productName" class="form-control" placeholder="Enter Name" id="name" value="<?php  ?>">
        </div>
        <div class="form-group">
            <label for="price">Giá Product:</label>
            <input type="text" name="productPrice" class="form-control" placeholder="Enter price" id="price" value=" ">
        </div>
        <div class="form-group">
            <label for="title">Tiêu đề Product:</label>
            <input type="text" name="productTitle" class="form-control" placeholder="Enter title" id="title" value="<?php  ?>">
        </div>
        <div class="form-group">
            <label for="type">Danh mục Product:</label>
            <select name="productType" id="" class="form-control">
                <option value="<?php ?>" selected><?php  ?></option>
                <?php  ?>
                    <option value="<?php  ?>"><?php  ?></option>
                <?php  ?>
            </select>
        </div>
        <div class="form-group">
            <label for="img">Ảnh sản phẩm</label> <br>
            <img src="/public/images/<?php ?>" alt="" style="width: 100px;height:100px ;margin-bottom: 5px;" > <br>
            <input type="hidden" name="name_image" value="<?php  ?>">
            <input type="file" name="img" id="img">
            <input type="hidden" name="id" value="<?php  ?>"> 
        </div>
        <div class="form-group">
            <label for="desc">Mô tả Product:</label><br>
            <textarea name="productDesc" id="" cols="30" rows="5" style="width: 1105px;" class="form-control"><?php  ?></textarea>
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