<?php get_header('', 'danh sách sản phẩm trong danh mục') ?>
<style>
    .footer {
        margin-top: 140px;
    }
</style>
<div class="header__collections">
    <a href="?role=client&mod=home">Trang chủ / </a>
    <span style="margin-left: 5px;"><?php echo $home_parent_category['name'] ?></span>
</div>
<div class="header__danhmuc">
    <h1><?php echo $home_categories['name'] ?></h1>
</div>
<div class="header__categoryCollection">
    <ul class="header__listCategoryCollection">
        <li>
            <a href="">Danh mục</a>
            <a href=""><i class='bx bx-chevron-down'></i></a>
            <ul class="submenu">
                <?php foreach($categories_all_by_parent_id as $values) : ?>
                    <li><a href="?role=client&mod=home_collections&id=<?php echo $values['id'] ?>&parent_id=<?php echo $values['parent_id'] ?>"><?php echo $values['name'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li>
            <a href="">Thương hiệu</a>
            <a href=""><i class='bx bx-chevron-down'></i></a>
        </li>
        <li>
            <a href="">Giá sản phẩm</a>
            <a href=""><i class='bx bx-chevron-down'></i></a>
        </li>
        <li>
            <a href="">Màu sắc</a>
            <a href=""><i class='bx bx-chevron-down'></i></a>
        </li>
        <li>
            <a href="">Kích thước</a>
            <a href=""><i class='bx bx-chevron-down'></i></a>
        </li>
    </ul>
    <select name="" id="">
        <option value="">Mới nhất</option>
        <option value="">Sản phẩm nổi bật</option>
        <option value="">Giá: Tăng dần</option>
        <option value="">Giá: Giảm dần</option>
        <option value="">Giá: Tên A-Z</option>
        <option value="">Giá: Tên Z-A</option>
        <option value="">Cũ nhất</option>
        <option value="">Bán chạy nhất</option>
    </select>
</div>
<div class="main__listProduct" style="margin-top: 20px;">
    <?php foreach ($home_list_product_by_id_cate as $values) : ?>
        <div class="main__product">
            <a href="?role=client&mod=home_detail&id=<?php echo $values['id'] ?>&id_cate=<?php echo $values['categories_id'] ?>"><img src="/public/uploads/<?php echo $values['thumbnail'] ?>" alt="" class="img_product"></a>
            <div class="title_product"><a href="?role=client&mod=home_detail&id=<?php echo $values['id'] ?>&id_cate=<?php echo $values['categories_id'] ?>"><?php echo $values['title'] ?></a></div>
            <div href="" class="price_product"><?php echo number_format($values['price']) ?><sup><u>đ</u></sup></div>
            <div class="main__btn">
                <button class="btn-add">Thêm vào giỏ</button>
                <button class="btn-buy">Mua ngay</button>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php get_footer('') ?>