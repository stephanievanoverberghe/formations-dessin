<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/constants.php');
require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Comment.php');
require_once(__DIR__ . '/../../../models/User.php');

try {

    $comments = Comment::getAll();


} catch (\Throwable $th) {
    var_dump($th);
    die;
    // header('location: /controllers/errorCtrl.php');
    // die;
}

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/list/admin-comments.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');