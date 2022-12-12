<?php
function construct()
{
    load_model('index');
}

function indexAction()
{
    if (isset($_GET['id_cate'])) {
        $id = $_GET['id_cate'];
        $data['home_product_special'] = get_list_product_special();
        $data['home_product'] = get_product_by_category_id($id);
        $data['home_list_categories'] = get_list_categories();
        $data['home_list_brand'] = get_list_brand();
        load_view('index', $data);
    } else if (isset($_GET['id_brand'])) {
        $id = $_GET['id_brand'];
        $data['home_product_special'] = get_list_product_special();
        $data['home_product'] = get_product_by_brand_id($id);
        $data['home_list_categories'] = get_list_categories();
        $data['home_list_brand'] = get_list_brand();
        load_view('index', $data);
    } else {
        $data['home_product_special'] = get_list_product_special();
        $data['home_product'] = get_list_product();
        $data['home_list_categories'] = get_list_categories();
        $data['home_list_brand'] = get_list_brand();
        load_view('index', $data);
    }
}
