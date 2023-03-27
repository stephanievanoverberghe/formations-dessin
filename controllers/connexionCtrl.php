<?php

require_once(__DIR__ . '/../config/constants.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") { //if my request in POST

//******************************************** EMAIL CLEAN AND VALIDATE ************************************************* *//   
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

    if (empty($email)) { // if my email variable is empty
        $errors["email"] = "Le champ est obligatoire !";
    } else { // if obligatory, return error
        $testEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$testEmail) {
            $errors["email"] = 'Le mail n\'est pas valide';
        }
    }

//******************************************** PASSWORD CLEAN AND VALIDATE************************************************ *// 
    $password = filter_input(INPUT_POST, 'password');
    if (empty($password)) {
        $errors["password"] = "Le mot de passe est obligatoire!!";
    } else {
        $testPassword = password_hash($password, PASSWORD_DEFAULT);
        if (!$testPassword) {
            $errors["password"] = "Le mot de passe n'est pas au bon format!";
        }
    }

}

// CREATE COOKIES

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    setcookie('email', $_POST['email'], (time() + 365 * 24 * 3600), '/');
    setcookie('password', $_POST['password'], (time() + 365 * 24 * 3600), '/');
}

// VIEWS DISPLAY

include_once(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/connexion.php');
include_once(__DIR__ . '/../views/templates/footer.php');