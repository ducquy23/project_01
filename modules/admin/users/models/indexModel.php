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

function create_user($username,$password,$email) {
    $id = db_insert('users',[
        'fullname' => $username,
        'password' => $password,
        'email' => $email
    ]);
    return $id;
}
function update_user($id,$username,$password,$email) {
    db_update('users',[
        'fullname' => $username,
        'password' => $password,
        'email' => $email
    ],"id = $id");
    return true;
}
function get_one_user_by_id($id) {
    $result = db_fetch_row("SELECT * FROM `users` WHERE `id` = {$id}");
    return $result;
}
