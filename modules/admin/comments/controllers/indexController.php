<?php
function construct() {
    load_model('index');
}

function indexAction() {
    $data['comments'] = get_list_comments();
    load_view('index', $data);
    
}
function deleteAction() {
    $id = $_GET['id'];
    delete_comment($id);
    push_notification("success",['Xóa bình luận thành công']);
    header("location:?role=admin&mod=comments");
}
?>