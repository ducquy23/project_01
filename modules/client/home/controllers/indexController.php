<?php
function construct()
{
    load_model('index');
   
}

function indexAction()
{
    $data['home_list_cate_football'] = get_list_categories_football();
    $data['home_list_cate_shoes'] = get_list_categories_shoes();
    if (isset($_GET['id_cate_football'])) {
        $id_cate_football = $_GET['id_cate_football'];
        $data['home_cate_shoes'] = get_list_product_shoes();
        $data['home_cate_football'] = get_list_product_by_id_cate_football($id_cate_football);
        $data['home_product_special'] = get_list_product_special();
        load_view('index', $data);
    }else if(isset($_GET['id_cate_shoes'])) {
        $id_cate_shoes = $_GET['id_cate_shoes'];
        $data['home_cate_shoes'] = get_list_product_by_id_cate_shoes($id_cate_shoes);
        $data['home_cate_football'] = get_list_product_football();
        $data['home_product_special'] = get_list_product_special();
        load_view('index',$data);
    }else {
        $data['home_cate_shoes'] = get_list_product_shoes();
        $data['home_cate_football'] = get_list_product_football();
        $data['home_product_special'] = get_list_product_special();
        load_view('index', $data);
    }
}
