<?php

require_once(__DIR__ . '/../../config/constants.php');
require_once(__DIR__ . '/../../models/Training.php');
require_once(__DIR__ . '/../../models/Video.php');

session_start();

try {
    $id_trainings = intval(filter_input(INPUT_GET, 'id_trainings', FILTER_SANITIZE_NUMBER_INT));
    $id_videos = intval(filter_input(INPUT_GET, 'id_videos', FILTER_SANITIZE_NUMBER_INT));
    $trainings = Training::getAll();
    $videos = Video::getAll();
    
} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}


include_once(__DIR__ . '/../../views/templates/header.php');
include(__DIR__ . '/../../views/formation/formation.php');
include_once(__DIR__ . '/../../views/templates/footer.php');