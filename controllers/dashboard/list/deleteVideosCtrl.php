<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Video.php');

try {
    $id_videos = intval(filter_input(INPUT_GET, 'id_videos', FILTER_SANITIZE_NUMBER_INT));
    $isDelete = Video::delete($id_videos);
    
    if($isDelete) {
        $code = 5;
    } else {
        $code = 6;
    }
    header('Location: /controllers/dashboard/list/admin-videosCtrl.php?code='. $code);
    die;
    
} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}