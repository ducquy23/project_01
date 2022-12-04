<?php
function get_list_categories_football() {
    $result = db_fetch_array("SELECT * FROM `categories` WHERE parent_id = 1");
    return $result;
}
function get_list_categories_shoes() {
    $result = db_fetch_array("SELECT * FROM `categories` WHERE parent_id = 4");
    return $result;
}
function check_user($fullname,$password) {
    $result = db_fetch_row("SELECT * FROM `users` WHERE `fullname` = '$fullname' AND `password` = '$password'");
    return $result;
}
function check_email ($email) {
    $result = db_fetch_row("SELECT email,password FROM `users` WHERE `email` = '$email'");
    return $result;
}