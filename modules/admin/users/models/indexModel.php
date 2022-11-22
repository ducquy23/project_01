<?php

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `users`");
    return $result;
}
function delete_users($id)
{
    db_delete('users', "id = $id");
    return true;
}
function create_users($fullname, $email,$password)
{
    $id = db_insert('users',[
        'fullname' => $fullname,
        'email' => $email,
        'password' => $password,
    ]);
    return $id;
}

function get_one_users($id) {
    $result = db_fetch_row("SELECT * FROM `users` WHERE `id` = {$id}");
    return $result;
}

function update_category($id, $name) {
    db_update('users', [
        'name' => $name,
    ], "id = $id");
    return true;
}
