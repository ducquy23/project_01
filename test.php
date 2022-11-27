<?php
function request_auth($isLogin = true)
{
    if (true !== $isLogin) {
        // header("Location: " . ($isLogin ? '/?role=admin&mod=auth' : '/?role=admin'));
        // die;
        if($isLogin) {
            echo "True";
        }else {
            echo "false";
        }
    }
}
request_auth(false);