<?php
function get_list_comments(){
    $result = db_fetch_array("SELECT comments.id as 'comment_id',content,fullname,title FROM `comments` inner join `users` on comments.users_id = users.id inner join `products` on products.id = comments.products_id");
    return $result;
}
function delete_comment($id)
{
    db_delete('comments', "id = $id");
    return true;
}