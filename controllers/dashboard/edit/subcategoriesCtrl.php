<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404.php');
    die;
}

require_once(__DIR__ . '/../../../config/constants.php');
require_once(__DIR__ . '/../../../models/Subcategory.php');

try {
    $id_sub_categories = intval(filter_input(INPUT_GET, 'id_sub_categories', FILTER_SANITIZE_NUMBER_INT));
    $subcategory = Subcategory::getData($id_sub_categories);
    
} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAY **********************************************/

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/edit/subcategories.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');