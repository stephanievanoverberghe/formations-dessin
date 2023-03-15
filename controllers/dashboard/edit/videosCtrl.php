<?php

require_once(__DIR__ . '/../../../models/Video.php');

try {
    $id_videos = intval(filter_input(INPUT_GET, 'id_videos', FILTER_SANITIZE_NUMBER_INT));
    $video = Video::getData($id_videos);
    
} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAY **********************************************/

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/edit/videos.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');