<?php
function get_list_categories()
{
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}
function delete_categories($id)
{
    db_delete('categories', "id = $id");
    return true;
}
function create_categories($name)
{
    $id = db_insert('categories', [
        'name' => $name,
    ]);
    return $id;
}

function get_one_category($id) {
    $result = db_fetch_row("SELECT * FROM `categories` WHERE `id` = {$id}");
    return $result;
}

function update_category($id, $name) {
    db_update('categories', [
        'name' => $name,
    ], "id = $id");
    return true;
}
function get_product_by_id_cate($id) {
    $result = db_fetch_array("SELECT * FROM products WHERE categories_id = $id");
    return $result;
}