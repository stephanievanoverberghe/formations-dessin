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
        $code = 5;
    } else {
        $code = 6;
    }
    header('Location: /controllers/dashboard/list/admin-articlesCtrl.php?code=');
    die;

} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}