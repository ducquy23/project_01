<?php get_header('', 'Giao diện trang chủ');
?>
<div class="header__banner">
    <div class="mySlides fade-img">
        <a href=""><img src="/public/images/img_client/banner_01.png" style="width:100%"></a>
    </div>
    <div class="mySlides fade-img">
        <a href=""><img src="/public/images/img_client/banner_02.png" style="width:100%"></a>
    </div>

    <div class="mySlides fade-img">
        <a href=""><img src="/public/images/img_client/banner_03.png" style="width:100%"></a>
    </div>
</div>
<div class="header__bottom">
    <a href=""><img src="/public/images/img_client/banner_bottom_01.png" alt=""></a>
    <a href=""><img src="/public/images/img_client/banner_bottom_02.png" alt=""></a>
</div>
</div>
<!-- end-header -->

<!-- main -->
<div class="main">
    <div class="main__football">
        <div class="main__name">
            <h2>BÓNG</h2>
        </div>
        <ul class="main__list">
            <?php foreach ($home_list_cate_shoes as $values) : ?>
                <li><a href="?role=client&mod=home&id_cate_football=<?php echo $values['id'] ?>"><?php echo $values['name'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="main__listProduct">
        <?php foreach ($home_cate_football as $values) : ?>
            <div class="main__product">
                <a href="?role=client&mod=home_detail&id=<?php echo $values['id'] ?>&id_cate=<?php echo $values['categories_id'] ?>"><img src="/public/uploads/<?php echo $values['thumbnail'] ?>" alt="" class="img_product"></a>
                <div class="title_product"><a href="?role=client&mod=home_detail&id=<?php echo $values['id'] ?>&id_cate=<?php echo $values['categories_id'] ?>"><?php echo $values['title'] ?></a></div>
                <div href="" class="price_product"><?php echo number_format($values['price']) ?><sup><u>đ</u></sup></div>
                <div class="main__btn">
                    <a href="?role=client&mod=cart&id=<?php echo $values['id'] ?>"><button class="btn-add">Thêm vào giỏ</button></a>
                    <a href="?role=client&mod=cart&action=pay&id=<?php echo $values['id'] ?>"><button class="btn-buy">Mua ngay</button></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="main__football">
        <div class="main__name">
            <h2>GIÀY</h2>
        </div>
        <ul class="main__list">
            <?php foreach ($home_list_cate_football as $values) : ?>
                <li><a href="?role=client&mod=home&id_cate_shoes=<?php echo $values['id'] ?>"><?php echo $values['name'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="main__listProduct">
        <?php foreach ($home_cate_shoes as $key => $values) : ?>
            <div class="main__product">
                <a href="?role=client&mod=home_detail&id=<?php echo $values['id'] ?>&id_cate=<?php echo $values['categories_id'] ?>"><img src="/public/uploads/<?php echo $values['thumbnail'] ?>" alt="" class="img_product"></a>
                <div class="title_product"><a href="?role=client&mod=home_detail&id=<?php echo $values['id'] ?>&id_cate=<?php echo $values['categories_id'] ?>"><?php echo $values['title'] ?></a></div>
                <div class="price_product"><?php echo number_format($values['price'],) ?><sup><u>đ</u></sup></div>
                <div class="main__btn">
                    <a href="?role=client&mod=cart&id=<?php echo $values['id'] ?>"><button class="btn-add">Thêm vào giỏ</button></a>
                    <a href="?role=client&mod=cart&action=pay&id=<?php echo $values['id'] ?>"><button class="btn-buy">Mua ngay</button></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="main__football">
        <div class="main__name">
            <h2>Sản phẩm đặc biệt</h2>
        </div>
    </div>
    <div id="main__topProduct">
        <?php foreach ($home_product_special as $values) : ?>
            <div class="item__product" style="background-image: url('/public/uploads/<?php echo $values['thumbnail'] ?>');">
                <div class="item__content">
                    <div class="title_product"><a href="?role=client&mod=home_detail&id=<?php echo $values['id'] ?>&id_cate=<?php echo $values['categories_id'] ?>"><?php echo $values['title'] ?></a></div>
                    <div class="price_product"><?php echo number_format($values['price']) ?><sup><u>đ</u></sup></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="main__btnchange">
        <div id="pre"><i class='bx bx-skip-previous'></i></div>
        <div id="next"><i class='bx bx-skip-next' ></i></div>    
    </div>

</div>
<!-- end-main -->

<!-- footer -->
<?php get_footer('', 'Giao diện trang chủ') ?>