<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Submodule.php');

try {
    $id_sub_modules = intval(filter_input(INPUT_GET, 'id_sub_modules', FILTER_SANITIZE_NUMBER_INT));

    $isDelete = Submodule::delete($id_sub_modules);

    if($isDelete) {
        $message = 7;
    } else {
        $message = 8;
    }
    header('Location: /controllers/dashboard/list/admin-submodulesCtrl.php?code='. $code);
    die;

} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}