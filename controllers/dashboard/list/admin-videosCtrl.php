<?php

require_once(__DIR__ . '/../../../models/Video.php');

try {
    $videos = Video::getAll();

} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/list/admin-videos.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');