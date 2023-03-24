<?php

require_once(__DIR__ . '/../../../config/constants.php');
require_once(__DIR__ . '/../../../models/User.php');

try {
    $search = trim((string)filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS));
    $users = User::getAll($search);
} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}


/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/list/admin-users.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');