<?php

require_once(__DIR__ . '/../../config/constants.php');

session_start();


include_once(__DIR__ . '/../../views/templates/header.php');
include(__DIR__ . '/../../views/magazine/subCategorie.php');
include_once(__DIR__ . '/../../views/templates/footer.php');