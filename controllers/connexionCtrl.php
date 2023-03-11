<?php

require_once(__DIR__ . '/../config/constants.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") { //if my request in POST

//******************************************** EMAIL CLEAN AND VALIDATE ************************************************* *//   
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

    if (empty($email)) { // if my email variable is empty
        $error["email"] = "L'adresse mail est obligatoire!!";
    } else { // if obligatory, return error
        $testEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$testEmail) {
            $error["email"] = "L'adresse email n'est pas au bon format!!";
        }
    }

//******************************************** PASSWORD CLEAN AND VALIDATE************************************************ *// 
    $password = filter_input(INPUT_POST, 'password');
    if (empty($password)) {
        $error["password"] = "Le mot de passe est obligatoire!!";
    } else {
        $testPassword = password_hash($password, PASSWORD_DEFAULT);
        if (!$testPassword) {
            $error["password"] = "Le mot de passe n'est pas au bon format!";
        }
    }

     //===================== Password : Nettoyage et validation =======================
    // $password = filter_input(INPUT_POST, 'password');
    // $passwordCheck = filter_input(INPUT_POST, 'passwordCheck');
    // if($password != $passwordCheck){
    //     $error["password"] = "Les mots de passe ne correspondent pas";
    // }
    // $passwordHash = password_hash($password, PASSWORD_DEFAULT);

}

// views concerned

include_once(__DIR__ . '/../views/templates/header.php');

// If not error, display this message, or forward to form
if ($_SERVER["REQUEST_METHOD"] != "POST" || !empty($error)) {
    include(__DIR__ . '/../views/connexion.php');
} else {
    include_once(__DIR__ . '/../views/home.php');
}

include_once(__DIR__ . '/../views/templates/footer.php');