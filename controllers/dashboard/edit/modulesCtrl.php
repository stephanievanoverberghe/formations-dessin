<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../models/Module.php');

try {
    $id_modules = intval(filter_input(INPUT_GET, 'id_modules', FILTER_SANITIZE_NUMBER_INT));
    $module = Module::getData($id_modules);
    
} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAY **********************************************/

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/edit/modules.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');