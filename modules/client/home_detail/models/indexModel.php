<?php 
function get_product_by_id($id) {
    $result = db_fetch_row("SELECT products.id as 'product_id',categories.id as 'categories_id',thumbnail,title,price,description,categories.name as 'cate_name',brands.name as 'brand_name' 
    FROM products 
    INNER JOIN categories ON categories.id = products.categories_id 
    INNER JOIN brands ON products.brands_id = brands.id WHERE products.id = $id");
    return $result;
}
function get_product_by_category($id) { 
    $result = db_fetch_array("SELECT * FROM products WHERE categories_id = $id");
    return $result;
}
function insert_comment($content,$id_prd,$id_user,$comment_date) {
    $id = db_insert('comments',[
        'content' => $content,
        'products_id' => $id_prd,
        'users_id' => $id_user,
        'comment_date' => $comment_date
    ]);
}
function get_list_comment($id) {
    $result = db_fetch_array("SELECT * FROM comments INNER JOIN users ON comments.users_id = 
    users.id WHERE products_id = $id GROUP BY comments.id DESC"); 
    return $result;
}
function get_list_img_by_id($id) {
    $result = db_fetch_array("SELECT * FROM images WHERE products_id = $id");
    return $result;
}
function get_img_by_id($id) {
   $result =  db_fetch_row("SELECT thumbnail FROM images WHERE id = $id");
   return $result;
}