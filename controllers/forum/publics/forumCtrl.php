<?php

session_start();

require_once(__DIR__ . '/../../../config/constants.php');


include_once(__DIR__ . '/../../../views/templates/header.php');
include(__DIR__ . '/../../../views/forum/publics/forum.php');
include_once(__DIR__ . '/../../../views/templates/footer.php');