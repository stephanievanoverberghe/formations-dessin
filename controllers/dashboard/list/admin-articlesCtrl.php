<?php

require_once(__DIR__ . '/../../../models/Article.php');

try {
    $articles = Article::getAll();

} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/list/admin-articles.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');