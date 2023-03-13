<?php

require_once(__DIR__ . '/../../config/constants.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

//************************************* ADD COMMENTS ARTICLE CLEAN AND VALIDATE ********************************** *// 
    $addComments = trim(filter_input(INPUT_POST, 'addComments', FILTER_SANITIZE_SPECIAL_CHARS));
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../views/templates/header.php');
include(__DIR__ . '/../../views/magazine/article.php');
include_once(__DIR__ . '/../../views/templates/footer.php');