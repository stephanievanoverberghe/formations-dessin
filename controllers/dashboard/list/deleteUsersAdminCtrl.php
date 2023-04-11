<?php 
session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/constants.php');
require_once(__DIR__ . '/../../../models/User.php');

try {

$id_users = intval(filter_input(INPUT_GET, 'id_users', FILTER_SANITIZE_NUMBER_INT));


$isDelete = User::delete($id_users);

if($isDelete) {
    $code = 5;
} else {
    $code = 6;
}


} catch (\Throwable $th) {

header('Location: /controllers/errorCtrl.php');
die;
}