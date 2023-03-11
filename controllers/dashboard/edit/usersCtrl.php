<?php

require_once(__DIR__ . '/../../../models/User.php');

try {
    
    $user = User::getUser($id_users);
    // var_dump($user);
    // die;

} catch (\Throwable $th) {
    // header('Location: /controllers/errorCtrl.php');
    // die;
}

/* ************* VIEWS DISPLAY **********************************************/

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/edit/users.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');