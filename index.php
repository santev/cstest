<?php

require 'vendor/autoload.php';

use cstest\src as src;

if (isset($_GET['group'])) {
    $id = $_GET['group'];
    $prod_arr = src\products::getAllProdsByGroupId($id);
} else {
    $prod_arr = src\products::getByGroupId(0);
}

$menu_arr = src\menutree::forGroupId(0);

$tpl = new src\template();
$tpl->assign('catalog_menu', $tpl->getListHtml($menu_arr, 'catalogmenu.tpl'));
$tpl->assign('product_list', $tpl->getListHtml($prod_arr, 'productlist.tpl'));
$tpl->display('index.tpl');
