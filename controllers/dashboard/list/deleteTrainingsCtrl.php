<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Training.php');

try {
    $id_trainings = intval(filter_input(INPUT_GET, 'id_trainings', FILTER_SANITIZE_NUMBER_INT));

    $isDelete = Training::delete($id_trainings);

    if($isDelete) {
        $code = 5;
    } else {
        $code = 6;
    }
    header('Location: /controllers/dashboard/list/admin-trainingsCtrl.php?code=');
    die;

} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}