<?php

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Training.php');

try {
    $id_trainings = intval(filter_input(INPUT_GET, 'id_trainings', FILTER_SANITIZE_NUMBER_INT));

    $isDelete = Training::delete($id_trainings);

    if($isDelete) {
        SessionFlash::setMessage('La formation a bien été supprimé');
    } else {
        SessionFlash::setMessage('Un problème est survenu lors de la suppression de la formation');
    }
    header('Location: /controllers/dashboard/list/admin-trainingsCtrl.php?code=');
    die;

} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}