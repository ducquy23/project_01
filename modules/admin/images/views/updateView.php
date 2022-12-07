<?php get_header('', 'Tạo mới ảnh sản phẩm');
?>

<div class="content-main">
    <h3>Cập Nhập Images</h3>
    <form action="?role=admin&mod=images&action=update" class="container" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Tên Sản phẩm:</label>
            <select name="name" id="" class="form-control">
                <option value="<?php echo $list_img_by_id['img_id'] ?>"><?php echo $list_img_by_id['title'] ?></option>
                <?php foreach($list_products as $values ) : ?>
                    <option value="<?php echo $values['id'] ?>"><?php echo $values['title'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">    
            <label for="img">Nhập ảnh:</label><br>
            <img src="/public/uploads/<?php echo  $list_img_by_id['img_thumbnail']?>" alt="" style="width: 100px;border: 1px solid gray;margin: 10px 0;"> <br>
            <input type="file" name="fileUpload" id="img">
            <input type="hidden" name="id" value="<?php echo $list_img_by_id['img_id'] ?>">
            <input type="hidden" name="img_current" value="<?php echo $list_img_by_id['img_thumbnail'] ?>">
        </div>
        <div class="form-submit">
            <button type="submit" class="btn btn-success" name="submit">Update Images</button>
        </div>
    </form>
</div>
</article>
</div>

<div class="clear-both"></div>
<?php get_footer() ?>