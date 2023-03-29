<?php

session_start();
// var_dump($_SESSION['user']->admin);

require_once(__DIR__ . '/../config/constants.php');


include_once(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/home.php');
include_once(__DIR__ . '/../views/templates/footer.php');