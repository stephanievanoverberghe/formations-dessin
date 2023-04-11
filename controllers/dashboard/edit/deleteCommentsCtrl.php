<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Comment.php');

try {
    $id_comments = intval(filter_input(INPUT_GET, 'id_comments', FILTER_SANITIZE_NUMBER_INT));

    $isDelete = Comment::delete($id_comments);

    if($isDelete) {
        SessionFlash::setMessage('Le commentaire a bien été supprimé');
    } else {
        SessionFlash::setMessage('Un problème est survenu lors de la suppression du commentaire');
    }
    header('Location: /controllers/dashboard/list/admin-commentsCtrl.php?code=');
    die;

} catch (\Throwable $th) {
    // var_dump($th);
    // die;
    header('location: /controllers/errorCtrl.php');
    die;
}