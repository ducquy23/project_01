<?php
function construct()
{
    load_model('index');
}

function indexAction()
{
    $data['home_product_special'] = get_list_product_special();
    $data['home_product_outstanding'] = get_product_outstanding();
    if (isset($_GET['id_cate'])) {
        $id = $_GET['id_cate'];
        $data['home_product'] = get_product_by_category_id($id);
        $data['home_list_categories'] = get_list_categories();
        $data['home_list_brand'] = get_list_brand();
        load_view('index', $data);
    } else if (isset($_GET['id_brand'])) {
        $id = $_GET['id_brand'];
        $data['home_product'] = get_product_by_brand_id($id);
        $data['home_list_categories'] = get_list_categories();
        $data['home_list_brand'] = get_list_brand();
        load_view('index', $data);
    } else if (isset($_GET['name'])) {
        $name = $_GET['name'];
        $data['home_product'] = get_product_by_name($name);
        $data['home_list_categories'] = get_list_categories();
        $data['home_list_brand'] = get_list_brand();
        load_view('index', $data);
    } else {
        $item_per_page = !(empty($_GET['per_page'])) ? $_GET['per_page']  : 12;
        $current_page = !(empty($_GET['page'])) ? $_GET['page']  : 1;
        $offset = ($current_page - 1) * $item_per_page;
        $totalRecords = get_totalRecord();
        $totalPages = ceil($totalRecords / $item_per_page);
        $data['current_page'] = $current_page;
        $data['totalPages'] = $totalPages;
        $data['item_per_page'] = $item_per_page;
        $data['home_product'] = get_list_product($item_per_page, $offset);
        $data['home_list_categories'] = get_list_categories();
        $data['home_list_brand'] = get_list_brand();
        load_view('index', $data);
    }
}
