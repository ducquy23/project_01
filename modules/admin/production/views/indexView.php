<?php get_header('', 'Sản phẩm') ?>

<div class="content-main">
    <h3 class="title-content">Quản lý Sản phẩm</h3>
    <div class="list-product">
        <h4 class="list">Danh sách sản phẩm</h4>
        <div class="search-product">
            <a href=""><img src="/public/images/img_admin/Search.png" alt=""></a>
            <input type="text" placeholder="Aspen Weste...">
            <a href="?ctr=add_product"><button class="btn btn-success">Add New Product</button></a>
        </div>
    </div>
    <table class="table-bordered table">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Images</th>
                <th>Title</th>
                <th>description</th>
                <th>Catagories</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</article>
</div>
<div class="clear-both"></div>
<?php get_footer() ?>