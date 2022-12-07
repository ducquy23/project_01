<?php get_header('', 'Chi tiết sản phẩm');
?>
<style>
    .footer {
        margin-top: 100px;
    }
</style>
<div class="header__collections">
    <a href="?role=client&mode=home">Trang chủ / </a>
    <!-- <a href="" style="margin-left: 5px;"> Giày /</a> -->
    <span style="margin-left: 8px;"> <?php echo $info_detail_product['title'] ?></span>
</div>
<div class="main">
    <div class="intro">
        <ul class="intro__list-product">
            <?php foreach ($list_img as $values) : ?>
                <li><a href="?role=client&mod=home_detail&id=<?php echo $info_detail_product['product_id']?>&id_cate=<?php echo $info_detail_product['categories_id'] ?>&id_img=<?php echo $values['id'] ?>"><img src="/public/uploads/<?php echo $values['thumbnail'] ?>" alt=""></a></li>
            <?php endforeach; ?>
        </ul>
        <div class="intro__img-detail">
            <a href=""><img src="/public/uploads/<?php echo $info_detail_product['thumbnail'] ?>" alt=""></a>
        </div>
        <div class="intro__product-info">
            <div class="intro__product-title">
                <?php echo $info_detail_product['title'] ?>
            </div>
            <div class="intro__product-brand">
                Thương Hiệu: <a href=""><?php echo $info_detail_product['brand_name'] ?> </a>
                | Mã sản phẩm:<?php echo $info_detail_product['product_id'] ?>
            </div>
            <div class="intro__product-price">
                <?php echo number_format($info_detail_product['price']) . "Đ" ?>
            </div>
            <div class="intro__product-size">
                <p>Kích thước:</p>
                <ul>
                    <li>38</li>
                    <li>39</li>
                    <li>40</li>
                    <li>41</li>
                    <li>42</li>
                </ul>
            </div>
            <div class="intro__product-quantity">
                <div class="intro__product-input">
                    <label for="">Số lượng :</label><br>
                    <input type="number" value="1" min="0">
                </div>
                <div class="intro__product-btn">
                    <a href="?role=client&mod=cart&id=<?php echo $info_detail_product['product_id'] ?>"><button>Thêm vào giỏ hàng</button></a>
                    <a href="?role=client&mod=cart&action=pay&id=<?php echo $info_detail_product['product_id'] ?>"><button>Mua ngay</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="introProduct">
        <div class="introProduct__header">
            <a href="">THÔNG TIN SẢN PHẨM</a>
        </div>
        <div class="introProduct__desc">
            <?php echo $info_detail_product['description'] ?>
        </div>
    </div>
    <div class="comment">

    </div>
    <div class="relate">
        <div class="header__ralate">
            <p>SẢN PHẨM CÙNG LOẠI</p>
        </div>
        <div class="relate__list-product">
            <?php foreach ($list_categories_related as $values) : ?>
                <div class="main__product">
                    <a href="?role=client&mod=home_detail&id=<?php echo $values['id'] ?>&id_cate=<?php echo $values['categories_id'] ?>"><img src="/public/uploads/<?php echo $values['thumbnail'] ?>" alt="" class="img_product"></a>
                    <div class="title_product"><a href="?role=client&mod=home_detail&id=<?php echo $values['id'] ?>&id_cate=<?php echo $values['categories_id'] ?>"><?php echo $values['title'] ?></a></div>
                    <div class="price_product"><?php echo number_format($values['price']) ?><sup><u>đ</u></sup></div>
                    <div class="main__btn">
                        <button class="btn-add">Thêm vào giỏ</button>
                        <button class="btn-buy">Mua ngay</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>
<?php get_footer('', 'Chi tiết sản phẩm') ?>
<script>
    $(document).ready(function() {
        $(".comment").load("?role=client&mod=home_detail&action=view_comment", {
            id_prd: <?php echo $info_detail_product['product_id'] ?>
        });
    })
</script>