<?php
session_start();
$user = $_SESSION['user'];
$id_users = $user->id_users;

require_once(__DIR__ . '/../config/constants.php');
require_once(__DIR__ . '/../models/User.php');

try {

$id_users = intval(filter_input(INPUT_GET, 'id_users', FILTER_SANITIZE_NUMBER_INT));
// var_dump($id_users);
// die;

$isDelete = User::delete($id_users);

if($isDelete) {
    $code = 5;
} else {
    $code = 6;
}

unset($_SESSION['user']);
session_destroy();
header('location: /');


} catch (\Throwable $th) {
header('Location: /controllers/errorCtrl.php');
die;
}

/* ************* VIEWS DISPLAY **********************************************/
include_once(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/profil.php');
include_once(__DIR__ . '/../views/templates/footer.php');
