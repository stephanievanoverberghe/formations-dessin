<?php

require_once(__DIR__ . '/../../../config/constants.php');
require_once(__DIR__ . '/../../../models/Submodule_video.php');

try {
    $submodules_videos = Submodule_video::getAll();
} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}


include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/list/admin-videos-submodules.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');