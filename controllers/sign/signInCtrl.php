<?php

session_start();

require_once(__DIR__ . '/../../config/constants.php');
require_once(__DIR__ . '/../../models/User.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") { //if my request in POST

//******************************************** EMAIL CLEAN AND VALIDATE ************************************************* *//   
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

    if (empty($email)) { // if my email variable is empty
        $errors["email"] = "Le champ est obligatoire !";
    } else { // if obligatory, return error
        $testEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$testEmail) {
            $errors["email"] = 'Le mail n\'est pas valide !';
        }
        if (!User::isEmailExists($email)) {
            $errors['email'] = 'Ce compte n\'existe pas !';
        }
    }

//******************************************** PASSWORD CLEAN AND VALIDATE************************************************ *// 
    $password = filter_input(INPUT_POST, 'password');
    
    if (empty($errors)) {
        $user = User::getByEmail($email);
        $hash = $user->password;
        $isPasswordOk = password_verify($password, $hash);

        if (!$isPasswordOk) {
            $errors['password'] = 'Votre identifiant et votre mot de passe ne correspondent pas !';
        } else {            
            if (is_null($user->validated_at)) {
                $errors['validated_at'] = 'Vous n\'avez pas encore validé votre compte';
            } else {
                $_SESSION['user'] = $user;
                header('location: /');
                die;
            }
            
            
        }
        
    }
    

}



// VIEWS DISPLAY

include_once(__DIR__ . '/../../views/templates/header.php');
include(__DIR__ . '/../../views/sign/signIn.php');
include_once(__DIR__ . '/../../views/templates/footer.php');