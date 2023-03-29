<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Subcategory.php');

try {
    $id_sub_categories = intval(filter_input(INPUT_GET, 'id_sub_categories', FILTER_SANITIZE_NUMBER_INT));

    $isDelete = Subcategory::delete($id_sub_categories);

    if($isDelete) {
        $message = 7;
    } else {
        $message = 8;
    }
    header('Location: /controllers/dashboard/list/admin-subcategoriesCtrl.php?code='. $code);
    die;

} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}