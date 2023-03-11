<?php

require_once(__DIR__ . '/../../config/constants.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

//************************************* ADD COMMENTS ARTICLE CLEAN AND VALIDATE ********************************** *// 
    $addComments = trim(filter_input(INPUT_POST, 'addComments', FILTER_SANITIZE_SPECIAL_CHARS));
}

// Rendu des vues concernées
include_once(__DIR__ . '/../../views/templates/header.php');

if ($_SERVER["REQUEST_METHOD"] != "POST" || !empty($error)) {
    include(__DIR__ . '/../../views/magazine/article.php');
} else {
    include(__DIR__ . '/../../views/validate.php');
}

include_once(__DIR__ . '/../../views/templates/footer.php');