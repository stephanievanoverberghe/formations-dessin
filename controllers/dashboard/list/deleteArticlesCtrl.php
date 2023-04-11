<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Article.php');

try {
    $id_articles = intval(filter_input(INPUT_GET, 'id_articles', FILTER_SANITIZE_NUMBER_INT));

    $isDelete = Article::delete($id_articles);

    if($isDelete) {
        SessionFlash::setMessage('L\'article a bien été supprimé');
    } else {
        SessionFlash::setMessage('Un problème est survenu lors de la suppression de l\'article');
    }
    header('Location: /controllers/dashboard/list/admin-articlesCtrl.php?code=');
    die;

} catch (\Throwable $th) {
    // var_dump($th);
    // die;
    header('location: /controllers/errorCtrl.php');
    die;
}