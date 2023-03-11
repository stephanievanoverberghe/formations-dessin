<?php

require_once(__DIR__ . '/../../../models/User.php');

try {
    $id_users = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    // var_dump($id_user);
    // die;
    
    $user = User::getUser($id_users);

} catch (\Throwable $th) {
    // header('Location: /controllers/errorCtrl.php');
    // die;
}

/* ************* VIEWS DISPLAY **********************************************/

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/edit/users.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');