<?php
function get_list_categories_football()
{
    $result = db_fetch_array("SELECT * FROM `categories` WHERE parent_id = 1");
    return $result;
}
function get_list_categories_shoes()
{
    $result = db_fetch_array("SELECT * FROM `categories` WHERE parent_id = 4");
    return $result;
}
function create_users($fullname, $email, $password)
{
    $id = db_insert('users', [
        'fullname' => $fullname,
        'email' => $email,
        'password' => $password
    ]);
    return $id;
}
function get_list_users() {
    $result = db_fetch_array("SELECT * FROM users");
    return $result;
}