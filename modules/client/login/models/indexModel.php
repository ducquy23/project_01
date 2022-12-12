<?php
function check_user($fullname,$password) {
    $result = db_fetch_row("SELECT * FROM `users` WHERE `fullname` = '$fullname' AND `password` = '$password'");
    return $result;
}
function check_email ($email) {
    $result = db_fetch_row("SELECT email,password FROM `users` WHERE `email` = '$email'");
    return $result;
}