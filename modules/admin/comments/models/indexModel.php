<?php
function get_list_comments()
{
    $result = db_fetch_array("SELECT * FROM `comments`");
    return $result;
}
?>