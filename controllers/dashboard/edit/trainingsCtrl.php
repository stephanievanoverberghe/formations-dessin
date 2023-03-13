<?php

require_once(__DIR__ . '/../../../models/Training.php');

try {
    $id_trainings = intval(filter_input(INPUT_GET, 'id_trainings', FILTER_SANITIZE_NUMBER_INT));
    $training = Training::getData($id_trainings);
    
} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAY **********************************************/

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/edit/trainings.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');