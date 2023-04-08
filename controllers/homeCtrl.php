<?php

session_start();

require_once(__DIR__ . '/../config/constants.php');
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../models/Article.php');

try {
    $id_articles = intval(filter_input(INPUT_GET, 'id_articles', FILTER_SANITIZE_NUMBER_INT));
    $articles = Article::getAll();
    $last_three_articles = array_slice($articles, -3);

} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}


include_once(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/home.php');
include_once(__DIR__ . '/../views/templates/footer.php');