<?php 
get_header('');
// show_array($list_img);
 ?>
<h3 class="title-content">Quản lý ảnh sản phẩm</h3>
<div class="list-product">
    <h4 class="list">Danh sách ảnh</h4>
    <div class="search-product">
        <a href="?role=admin&mod=images&action=create"><button class="btn btn-success">Add New Images</button></a>
    </div>
</div>
<table class="table-bordered table">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Images</th>
            <th>Product Name</th>
            <th>Product_id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>        
        <?php foreach($list_img as $values) :  ?>
        <tr>
            <td><?php echo $values['img_id'] ?></td>  
            <td>
                <img src="/public/uploads/<?php echo $values['img'] ?>" alt="" style="width: 70px;">
            </td>
            <td><?php echo $values['title'] ?></td>
            <td>
                <?php echo $values['product_id']?>
            </td>
            <td style="width: 300px;text-align: center;">
                <a href="?role=admin&mod=images&action=update&id=<?php echo $values['img_id'] ?>"><button class="btn btn-success">Update</button></a>
                <a href="?role=admin&mod=images&action=delete&id=<?php echo $values['img_id'] ?>" onclick="return confirm('Bạn có muốn xóa không')"><button class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php get_footer('') ?>