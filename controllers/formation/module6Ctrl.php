<?php

require_once(__DIR__ . '/../../config/constants.php');
require_once(__DIR__ . '/../../models/Training.php');
require_once(__DIR__ . '/../../models/Module.php');

try {
    $id_trainings = intval(filter_input(INPUT_GET, 'id_trainings', FILTER_SANITIZE_NUMBER_INT));
    $id_modules = 7;
    $trainings = Training::getData($id_trainings, $id_modules);

    
} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}

include_once(__DIR__ . '/../../views/templates/header.php');
include(__DIR__ . '/../../views/formation/module6.php');
include_once(__DIR__ . '/../../views/templates/footer.php');