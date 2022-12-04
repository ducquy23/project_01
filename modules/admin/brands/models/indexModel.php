<?php
function get_list_brands()
{
    $result = db_fetch_array("SELECT * FROM `brands`");
    return $result;
}
function delete_brands($id)
{
    db_delete('brands', "id = $id");
    return true;
}
function create_brands($name)
{
    $id = db_insert('brands', [
        'name' => $name,
    ]);
    return $id;
}

function get_one_brands($id) {
    $result = db_fetch_row("SELECT * FROM `brands` WHERE `id` = {$id}");
    return $result;
}

function update_brands($id, $name) {
    db_update('brands', [
        'name' => $name,
    ], "id = $id");
    return true;
}