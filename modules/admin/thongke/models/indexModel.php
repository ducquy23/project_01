<?php

function get_list_thongke() {
    $result = db_fetch_array("SELECT categories.id as 'id_cate',categories.name as 'name_cate', 
    COUNT(products.id) as 'count_products',MIN(products.price) as 'min_product', 
    MAX(products.price) as 'max_product',AVG(products.price) as 'avg_product' 
    FROM `products` LEFT JOIN `categories` ON products.categories_id = categories.id 
    WHERE categories.id > 0 GROUP BY categories.id ORDER BY categories.id ASC");
    return $result;
}
?>