<?php

require_once(__DIR__ . '/../../config/constants.php');
require_once(__DIR__ . '/../../models/Article.php');
require_once(__DIR__ . '/../../models/Category.php');
require_once(__DIR__ . '/../../models/SubCategory.php');
require_once(__DIR__ . '/../../models/User.php');
require_once(__DIR__ . '/../../helpers/Text.php');

try {

    // $errors = [];
    // $user = $_SESSION['user'];
    // $id_users = $user->id_users;

    // $user = User::getData($id_users);
    
    
    $id_articles = intval(filter_input(INPUT_GET, 'id_articles', FILTER_SANITIZE_NUMBER_INT));

    $last_three_articles = Article::getAll('', 6);
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