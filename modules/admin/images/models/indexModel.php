<?php

function get_list_product()
{
    $result = db_fetch_array("SELECT id,title FROM products");
    return $result;
}
function insert_img($id, $thumbnail)
{
    $id = db_insert('images', [
        'products_id' => $id,
        'thumbnail' => $thumbnail
    ]);
    return $id;
}
function get_imgs() {
    $result = db_fetch_array("SELECT products.id as 'product_id',images.id as 'img_id',title,images.thumbnail as 'img' FROM images inner join products on products.id = images.products_id");
    return $result;
}
function get_imgs_by_id($id) {
    $result = db_fetch_row("SELECT images.id as 'img_id',title,images.thumbnail as 'img_thumbnail',products.id as 'product_id' FROM images INNER JOIN products ON products.id = images.products_id WHERE images.id = $id");
    return $result;
}
function update_images($id,$product_id,$thumbnail) {
    db_update('images',
    [
        'products_id' => $product_id,
        'thumbnail' => $thumbnail
    ],"id = $id");
    return true;
}
function delete_images($id)
{
    db_delete('images', "id = $id");
    return true;
}
