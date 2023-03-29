<?php

session_start();


require_once(__DIR__ . '/../config/constants.php');
require_once(__DIR__ . '/../models/User.php');


try {
    $id_users = intval(filter_input(INPUT_GET, 'id_users', FILTER_SANITIZE_NUMBER_INT));
    var_dump($id_users);
    die;
    $user = User::getData($id_users);
    
} catch (\Throwable $th) {
    // header('Location: /controllers/errorCtrl.php');
    // die;
}

/* ************* VIEWS DISPLAY **********************************************/
include_once(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/profil.php');
include_once(__DIR__ . '/../views/templates/footer.php');