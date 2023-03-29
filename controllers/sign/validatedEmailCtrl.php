<?php

require_once(__DIR__ . '/../../models/User.php');

$email = trim(filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL));

$isValidateOk = User::validateEmail($email);

if($isValidateOk) {
    $user = User::getByEmail($email);
    unset($user->password);
    $_SESSION['user'] = $user;
    $errors['global'] = 'Votre compte a bien été validé !';
} else {
    $errors['global'] = 'Problème de validation de compte !';
}

header('location: /');
die;