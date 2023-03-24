<?php

require_once(__DIR__ . '/../config/constants.php');
require_once(__DIR__ . '/../models/User.php');

try {
    $user = true;
    //On ne controle que s'il y a des données envoyées 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        /* ************* LASTNAME NETTOYAGE ET VERIFICATION **************************/
        $lastname = trim((string) filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));

        if (empty($lastname)) {
            $errors['lastname'] = 'Le champ est obligatoire';
        } else {
            $isOk = filter_var($lastname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEXP_NO_NUMBER . '/')));
            if (!$isOk) {
                $errors['lastname'] = 'Le nom n\'est pas valide';
            }
        }
    }
    /* ************* FIRSTNAME NETTOYAGE ET VERIFICATION **************************/
    $firstname = trim((string) filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));

    if (!empty($firstname)) {
        $isOk = filter_var($firstname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEXP_NO_NUMBER . '/')));
        if (!$isOk) {
            $errors['firstname'] = 'Le prénom n\'est pas valide';
        }
    }
    /* ************* EMAIL NETTOYAGE ET VERIFICATION **************************/
    $email = trim((string)filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

    if (empty($email)) {
        $errors['email'] = 'Le champ est obligatoire';
    } else {
        $isOk = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$isOk) {
            $errors['email'] = 'Le mail n\'est pas valide';
        }
    }
    /* ************* PASSWORD NETTOYAGE ET VERIFICATION **************************/
    $password = filter_input(INPUT_POST, 'password');
    $passwordCheck = filter_input(INPUT_POST, 'passwordCheck');
    if($password != $passwordCheck){
        $errors["password"] = "Les mots de passe ne correspondent pas";
    }
    $passwordHash = password_hash((string) $password, PASSWORD_DEFAULT);

    /* ************* PSEUDO NETTOYAGE ET VERIFICATION **************************/
    $pseudo = trim((string) filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_SPECIAL_CHARS));
    
    /* ************* BIRTHDATE NETTOYAGE ET VERIFICATION **************************/
    $birthdate = filter_input(INPUT_POST, 'birthdate', FILTER_SANITIZE_NUMBER_INT);

    if (!empty($birthdate)) {
        $isOk = filter_var($birthdate, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . REGEXP_DATE . '/']]);
        if (!$isOk) {
            $errors['birthdate'] = 'La date entrée n\'est pas valide !';
        } else {
            $birthdateObj = new DateTime($birthdate);
            $age = date('Y') - $birthdateObj->format('Y');

            if ($age > 100 || $age < 18) {
                $errors['birthdate'] = 'Votre age n\'est pas conforme !';
            }
        }
    }
    /* ************* COUNTRY NETTOYAGE ET VERIFICATION **************************/
    $country = trim((string) filter_input(INPUT_POST, 'country', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));

    if (!empty($country)) {
        if(!in_array($country, ARRAY_COUNTRIES)) {
            $errors['country'] = 'Le pays entré n\'est pas valide';
        }
    }

    // Si il n'y a pas d'erreurs, on enregistre le nouveau patient en BDD.
    if (empty($errors)) {

        //HYDRATATION
        $user = new User;
        $user->setLastname($lastname);
        $user->setFirstname($firstname);
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setPseudo($pseudo);
        $user->setBirthdate($birthdate);
        $user->setCountry($country);

        $response = $user->insert();

        if ($response) {
            $errors['global'] = 'Le compte a bien été ajouté';
        }
    }

} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}

// VIEWS DISPLAY
include_once(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/inscription.php');
include_once(__DIR__ . '/../views/templates/footer.php');