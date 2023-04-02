<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/constants.php');
require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Video.php');

try {
    $search = trim((string)filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS));
    $limit = NB_ELEMENTS_BY_PAGE;
    $page = intval(filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT));

    if (empty($page)) {
        $page = 1;
    }
    
    $offset = $limit * ($page - 1);

    $videos = Video::getAll($search, $limit, $offset);
    $nbPageTotal = Video::getAllCount($search);
    
    $pageNb = ceil(count($nbPageTotal) / $limit);

} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/list/admin-videos.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');