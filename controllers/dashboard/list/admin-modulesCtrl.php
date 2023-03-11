<?php

require_once(__DIR__ . '/../../../config/constants.php');
require_once(__DIR__ . '/../../../models/Module.php');

try {
    $modules = Module::getAll();
} catch (\Throwable $th) {
    // var_dump($th);
    // die;
    header('location: /controllers/errorCtrl.php');
    die;
}

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/list/admin-modules.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');