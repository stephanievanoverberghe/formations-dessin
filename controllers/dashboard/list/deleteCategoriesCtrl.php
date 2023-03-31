<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Category.php');

try {
    $id_categories = intval(filter_input(INPUT_GET, 'id_categories', FILTER_SANITIZE_NUMBER_INT));

    $isDelete = Category::delete($id_categories);

    if($isDelete) {
        $message = 7;
    } else {
        $message = 8;
    }
    header('Location: /controllers/dashboard/list/admin-categoriesCtrl.php?code='. $code);
    die;

} catch (\Throwable $th) {
    // var_dump($th);
    // die;
    header('location: /controllers/errorCtrl.php');
    die;
}