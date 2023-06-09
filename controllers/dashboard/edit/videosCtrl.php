<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../models/Video.php');
require_once(__DIR__ . '/../../../models/Submodule.php');

try {
    $id_videos = intval(filter_input(INPUT_GET, 'id_videos', FILTER_SANITIZE_NUMBER_INT));
    $id_sub_modules = intval(filter_input(INPUT_GET, 'id_sub_modules', FILTER_SANITIZE_NUMBER_INT));
    
    $video = Video::getData($id_videos);
    $submodule = Submodule::getData($id_sub_modules);
    
} catch (\Throwable $th) {
    var_dump($th);
    die;
    // header('Location: /controllers/errorCtrl.php');
    // die;
}

/* ************* VIEWS DISPLAY **********************************************/

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/edit/videos.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');