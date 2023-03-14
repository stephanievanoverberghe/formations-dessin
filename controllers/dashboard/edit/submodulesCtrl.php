<?php

require_once(__DIR__ . '/../../../models/Submodule.php');

try {
    $id_sub_modules = intval(filter_input(INPUT_GET, 'id_sub_modules', FILTER_SANITIZE_NUMBER_INT));
    $submodule = Submodule::getData($id_sub_modules);
    
} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAY **********************************************/

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/edit/submodules.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');