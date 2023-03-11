<?php

require_once(__DIR__ . '/../../../config/constants.php');
require_once(__DIR__ . '/../../../models/User.php');

try {
    $users = User::getAll();
} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}


/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/list/admin-users.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');