<?php

require_once(__DIR__ . '/../../config/constants.php');
require_once(__DIR__ . '/../../models/Article.php');
require_once(__DIR__ . '/../../models/Category.php');
require_once(__DIR__ . '/../../models/subCategory.php');
require_once(__DIR__ . '/../../helpers/Text.php');

try {
    $articles = Article::getAll();
    $categories = Category::getAll();
    $subcategories = Subcategory::getAll();


} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../views/templates/header.php');
include(__DIR__ . '/../../views/magazine/magazine.php');
include_once(__DIR__ . '/../../views/templates/footer.php');