<?php

require_once(__DIR__ . '/../../../models/Category.php');

try {
    $categories = Category::getAll();

} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/list/admin-categories.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');