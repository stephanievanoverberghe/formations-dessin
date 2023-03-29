<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404.php');
    die;
}

require_once(__DIR__ . '/../../../models/Subcategory.php');

try {
    $subcategories = Subcategory::getAll();

} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/list/admin-subcategories.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');