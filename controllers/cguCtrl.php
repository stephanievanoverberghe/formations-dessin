<?php

session_start();

require_once(__DIR__ . '/../config/constants.php');
require_once(__DIR__ . '/../config/config.php');



include_once(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/cgu.php');
include_once(__DIR__ . '/../views/templates/footer.php');