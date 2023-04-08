<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../models/Comment.php');

try {
    $id_comments = intval(filter_input(INPUT_GET, 'id_comments', FILTER_SANITIZE_NUMBER_INT));
    $comment = Comment::getData($id_comments);
    
} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAY **********************************************/

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/edit/comments.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');