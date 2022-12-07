<?php
defined('APPPATH') OR exit('Không được quyền truy cập phần này');

session_start();

// get Controller name
function get_controller() {
    global $config;
    $controller = isset($_GET['controller']) ? $_GET['controller'] : $config['default_controller']; 
    return $controller;
}

// get Module name

function get_role() {
    global $config;
    $role = isset($_GET['role']) ? $_GET['role'] : $config['default_role'];
    return $role;
}

function get_module() {
    global $config;
    $module = isset($_GET['mod']) ? $_GET['mod'] : $config['default_module'];
    return $module;
}

//get Action name
function get_action() {
    global $config;
    $action = isset($_GET['action']) ? $_GET['action'] : $config['default_action'];
    return $action;
}

function load($type, $name) { // helper,data
    if ($type == 'lib')
        $path = LIBPATH . DIRECTORY_SEPARATOR . "{$name}.php";
    if ($type == 'helper')
        $path = HELPERPATH . DIRECTORY_SEPARATOR . "{$name}.php"; //data.php
    if (file_exists($path)) {
        require "$path";
    } else {
        echo "{$type}:{$name} không tồn tại";
    }
}

/*
 * -----------------------------
 * callFunction
 * -----------------------------
 * Gọi đến hàm theo tham số biến
 */

function call_function($list_function = array()) {
    if (is_array($list_function)) {
        foreach ($list_function as $function) {
            if (function_exists($function())) {
                $function();
            }
        }
    }
}
function load_view($name, $data_send = array()) {
    global $data;
    $data = $data_send;
    $path = MODULESPATH . DIRECTORY_SEPARATOR . get_role() . DIRECTORY_SEPARATOR .  get_module() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $name . 'View.php';
    // $path = modules/admin/category/views/indexViews.php
    if (file_exists($path)) {
        if (is_array($data)) {
            foreach ($data as $key_data => $v_data) {
                $$key_data = $v_data;
            }
        }
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}

function load_model($name) { // modules/client/home/models/createModel.php
    $path = MODULESPATH . DIRECTORY_SEPARATOR . get_role() . DIRECTORY_SEPARATOR .  get_module() . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . $name . 'Model.php';
    if (file_exists($path)) {
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}

function get_header($name = '', $title = '') {
    global $data;
    if (empty($name)) {
        $name = 'header';
    } else {
        $name = "header-{$name}";
    }
    $path = LAYOUTPATH . DIRECTORY_SEPARATOR . $name . '_' . get_role() . '.php';
    if (file_exists($path)) {
        if (is_array($data)) {
            foreach ($data as $key => $a) {
                $$key = $a;
            }
        }
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}

function get_footer($name = '') {
    global $data;
    if (empty($name)) {
        $name = 'footer';
    } else {
        $name = "footer-{$name}";
    }
    $path = LAYOUTPATH . DIRECTORY_SEPARATOR . $name . '_' . get_role() . '.php';
    if (file_exists($path)) {
        if (is_array($data)) {
            foreach ($data as $key => $a) {
                $$key = $a;
            }
        }
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}

function push_notification($type, $msgs) { //success | ['Xóa danh mục sản phẩm thành công']
    if (!isset($_SESSION["notification"])) $_SESSION["notification"] = [];
    $data = [];
    $data["type"] = $type;
    $data["msgs"] = $msgs;
    $_SESSION["notification"][] = $data;
}

function get_notification() {
    if (!isset($_SESSION["notification"])) $_SESSION["notification"] = [];
    $notification = $_SESSION["notification"];
    unset($_SESSION["notification"]);
    return $notification;
}

function push_auth($user) {
    $_SESSION["auth"] = $user;
}
function is_auth()
{
    return isset($_SESSION["auth"]);
}

function get_auth()
{
    return $_SESSION["auth"];
}   

// function request_auth($isLogin = true)
// {
//     if (is_auth() !== $isLogin) {
//         header("Location: " . ($isLogin ? '/?role=admin&mod=auth' : '/?role=admin'));
//         die;
//     }
// }

/* 
    auther
*/
function remove_auth()
{
    unset($_SESSION["auth"]);
    return true;
}

function is_admin()
{
    return is_auth() && get_auth()['role'] == 2;
}


function request_auth($isLogin = true)
{
    $request_role = get_role() === 'admin' ? 2 : 1;
    if (is_auth() !== $isLogin) {
        header("Location: " . ($isLogin ? '/?role='. ($auth['role'] == 1 ? 'client' : 'admin') . '&mod=auth' : '/?role=' . ($auth['role'] == 1 ? 'client' : 'admin')));
        die;
    }
    if (is_auth()) {
        $auth = get_auth();
        if ($auth['role'] != $request_role) {
            header("Location: /?role=" . ($auth['role'] == 1 ? 'client' : 'admin'));
            die;
        }
    }
}

?>