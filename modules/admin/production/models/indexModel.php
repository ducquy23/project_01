<?php
function get_list_productions() {
    $result = db_fetch_array("SELECT products.id,title,description,
    thumbnail,price,special,brands.name as 'name_brand',categories.name as 'name_category' 
    FROM products 
    INNER JOIN brands ON brands.id = products.brands_id 
    INNER JOIN categories ON categories.id = products.categories_id");
    return $result;
}

function delete_productions($id)
{
    db_delete('products', "id = $id");
    return true;
}
function get_list_categories() {
    $result = db_fetch_array("SELECT categories.name,categories.id FROM categories");
    return $result;
}

function get_list_brand() {
    $result = db_fetch_array("SELECT * FROM brands");
    return $result;
}
function insert_productions($title,$price,$categories,$brands,$file_img,$description,$special) {
    $id = db_insert('products',[
        'title' => $title,
        'price' => $price,
        'categories_id' => $categories,
        'brands_id' => $brands,
        'thumbnail' => $file_img,
        'description' => $description,
        'special' => $special
    ]);
    return $id;
}

function update_production($id,$title,$price,$productBrands,$productType,$file_name,$productDesc,$special) {
    db_update('products',[
        'title' => $title,
        'price' => $price,
        'categories_id ' => $productType,
        'brands_id' => $productBrands,
        'thumbnail' => $file_name,
        'description'=> $productDesc ,
        'special' => $special
    ],"id = $id");
    return true;
}
function get_one_production($id) {
    $result = db_fetch_row("SELECT special,products.id as 'product_id',categories.id as 'categories_id',brands.id as 'brands_id',title,price,thumbnail,categories.name as 'name_cate',brands.name as 'name_brand',description FROM products
    INNER JOIN categories ON categories.id = products.categories_id
    INNER JOIN brands ON products.brands_id = brands.id
     WHERE products.id= $id");
    return $result;
}
function get_all_category(){
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}

function get_all_brands(){
    $result = db_fetch_array("SELECT * FROM `brands`");
    return $result;
}
