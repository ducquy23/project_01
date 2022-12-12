<?php
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