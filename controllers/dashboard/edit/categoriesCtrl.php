<?php

require_once(__DIR__ . '/../../../config/constants.php');
require_once(__DIR__ . '/../../../models/Category.php');

try {
    $id_categories = intval(filter_input(INPUT_GET, 'id_categories', FILTER_SANITIZE_NUMBER_INT));
    $category = Category::getData($id_categories);
    
} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAY **********************************************/

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/edit/categories.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');