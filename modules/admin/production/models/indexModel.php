<?php
function get_list_productions() {
    $result = db_fetch_array("SELECT products.id,title,description,thumbnail,price,special,brands.name as 'name_brand',categories.name as 'name_category' FROM products INNER JOIN brands ON brands.id = products.brands_id INNER JOIN categories ON categories.id = products.categories_id");
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
function insert_productions($title,$price,$categories,$brands,$file_img,$description) {
    $id = db_insert('products',[
        'title' => $title,
        'price' => $price,
        'categories_id' => $categories,
        'brands_id' => $brands,
        'thumbnail' => $file_img,
        'description' => $description
    ]);
    return $id;
}
// function get_one_production($id) {
//     $result = db_fetch_row("SELECT * FROM `productions` WHERE c.id = $id");
//     return $result;
// }

// function create_production($name, $description) {
//     $user = get_auth();
//     $id = db_insert('productions', [
//         'name' => $name,
//         'description' => $description,
//         'create_id' => $user['id'],
//         'created_at' => date('Y-m-d H:i:s')
//     ]);
//     return $id;
// }

// function update_production($id, $name, $description) {
//     db_update('productions', [
//         'name' => $name,
//         'description' => $description
//     ], "id = $id");
//     return true;
// }

// function delete_production($id) {
//     db_delete('productions', "id = $id");
//     return true;
// }

// function get_list_categories() {
//     $result = db_fetch_array("SELECT * FROM `categories`");
//     return $result;
// }