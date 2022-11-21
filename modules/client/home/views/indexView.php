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
            <li><a href="#" class="item__football active">Bóng đá</a></li>
            <li><a href="#" class="item__football">Bóng chuyền</a></li>
            <li><a href="#" class="item__football">Bóng rổ</a></li>
            <li><a href="#" class="item__football">Bóng Futsal</a></li>
        </ul>
    </div>
    <div class="main__listProduct">
        <?php for ($i = 0; $i < 8; $i++) : ?>
            <div class="main__product">
                <a href="?ctr=detail_product"><img src="/public/images/img_client/football_01.png" alt="" class="img_product"></a>
                <div class="title_product">BÓNG ĐÁ FIFA QUALITY PRO SEA GAMES 31 UHV 2.07</div>
                <div href="" class="price_product">2,250,000<sup><u>đ</u></sup></div>
                <div class="main__btn">
                    <button class="btn-add">Thêm vào giỏ</button>
                    <button class="btn-buy">Mua ngay</button>
                </div>
            </div>
        <?php endfor; ?>
    </div>
    <div class="main__football">
        <div class="main__name">
            <h2>GIÀY THỂ THAO</h2>
        </div>
        <ul class="main__list">
            <li><a href="#" class="item__shoes active">Giày đá bóng</a></li>
            <li><a href="#" class="item__shoes">Giày chạy</a></li>
            <li><a href="#" class="item__shoes">Giày cầu lông</a></li>
            <li><a href="#" class="item__shoes">Giày thời trang</a></li>
        </ul>
    </div>
    <div class="main__listProduct">
            <?php foreach($home_cate_shoes as $key => $values): ?>
            <div class="main__product">
                <a href="?ctr=detail_product"><img src="/public/images/img_client/<?php echo $values['thumbnail'] ?>" alt="" class="img_product"></a>
                <div class="title_product"><?php echo $values['title'] ?></div>
                <div class="price_product"><?php echo number_format($values['price'],) ?><sup><u>đ</u></sup></div>
                <div class="main__btn">
                    <button class="btn-add">Thêm vào giỏ</button>
                    <button class="btn-buy">Mua ngay</button>
                </div>
            </div>
             <?php endforeach; ?> 
    </div>
    <div class="main__football">
        <div class="main__name">
            <h2>Sản phẩm bán chạy</h2>
        </div>
    </div>
    <div id="main__topProduct">
        <div class="item__product" style="background-image: url('/public/images/img_client/shoes_soccer_01.png');">
            <div class="item__content">
                <div class="title_product">GIÀY BÓNG ĐÁ JOGARBOLA X-FACTOR 190424B</div>
                <div class="price_product">685,000<sup><u>đ</u></sup></div>
            </div>
        </div>
        <div class="item__product" style="background-image: url('/public/images/img_client/shoes_soccer_02.png');">
            <div class="item__content">
                <div class="title_product">GIÀY BÓNG ĐÁ JOGARBOLA X-FACTOR 190424B</div>
                <div class="price_product">685,000<sup><u>đ</u></sup></div>
            </div>
        </div>
        <div class="item__product" style="background-image: url('/public/images/img_client/shoes_soccer_03.png');">
            <div class="item__content">
                <div class="title_product">GIÀY BÓNG ĐÁ JOGARBOLA X-FACTOR 190424B</div>
                <div class="price_product">685,000<sup><u>đ</u></sup></div>
            </div>
        </div>
        <div class="item__product" style="background-image: url('/public/images/img_client/shoes_soccer_04.png');">
            <div class="item__content">
                <div class="title_product">GIÀY BÓNG ĐÁ JOGARBOLA X-FACTOR 190424B</div>
                <div class="price_product">685,000<sup><u>đ</u></sup></div>
            </div>
        </div>
        <div class="item__product" style="background-image: url('/public/images/img_client/shoes_soccer_05.png');">
            <div class="item__content">
                <div class="title_product">GIÀY BÓNG ĐÁ JOGARBOLA X-FACTOR 190424B</div>
                <div class="price_product">685,000<sup><u>đ</u></sup></div>
            </div>
        </div>
        <div class="item__product" style="background-image: url('/public/images/img_client/shoes_soccer_07.png');">
            <div class="item__content">
                <div class="title_product">GIÀY BÓNG ĐÁ JOGARBOLA X-FACTOR 190424B</div>
                <div class="price_product">685,000<sup><u>đ</u></sup></div>
            </div>
        </div>
    </div>
    <div class="main__btnchange">
        <div id="pre"><i class='fas fa-angle-left'></i></div>
        <div id="next"><i class='fas fa-angle-right'></i></div>
    </div>

</div>
<!-- end-main -->

<!-- footer -->
<?php get_footer('','Giao diện trang chủ') ?>