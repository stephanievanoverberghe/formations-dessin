<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Module.php');

try {
    $id_modules = intval(filter_input(INPUT_GET, 'id_modules', FILTER_SANITIZE_NUMBER_INT));

    $isDelete = Module::delete($id_modules);

    if($isDelete) {
        $code = 5;
    } else {
        $code = 6;
    }
    header('Location: /controllers/dashboard/list/admin-modulesCtrl.php?code='. $code);
    die;

} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}