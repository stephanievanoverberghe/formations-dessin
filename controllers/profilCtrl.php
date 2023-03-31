<?php

session_start();
$_SESSION['user']->id_users;
$_SESSION['user']->pseudo;
$_SESSION['user']->lastname;
$_SESSION['user']->firstname;
$_SESSION['user']->birthdate;
$_SESSION['user']->country;
$_SESSION['user']->email;
$_SESSION['user']->validated_at;


require_once(__DIR__ . '/../config/constants.php');
require_once(__DIR__ . '/../models/User.php');

try {
    $id_users = intval(filter_input(INPUT_GET, 'id_users', FILTER_SANITIZE_NUMBER_INT));
    $user = User::getDataUsers($id_users);
    
    // var_dump($user);
    // die;


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            /* ************* PSEUDO NETTOYAGE ET VERIFICATION **************************/
            $pseudo = trim((string)filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_SPECIAL_CHARS));

            /* ************* LASTNAME NETTOYAGE ET VERIFICATION **************************/
            $lastname = trim((string)filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS));

            /* ************* FIRSTNAME NETTOYAGE ET VERIFICATION **************************/
            $firstname = trim((string)filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS));

            /* ************* COUNTRY NETTOYAGE ET VERIFICATION **************************/
            $country = trim((string) filter_input(INPUT_POST, 'country', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));

            /* ************* BIRTHDATE NETTOYAGE ET VERIFICATION **************************/
            $birthdate = filter_input(INPUT_POST, 'birthdate', FILTER_SANITIZE_NUMBER_INT);

            if (isset($_POST['updateInfos'])) {
                //HYDRATATION
                $user = new User;
                $user->setLastname($lastname);
                $user->setFirstname($firstname);
                $user->setPseudo($pseudo);
                $user->setBirthdate($birthdate);
                $user->setCountry($country);

                $user = $user->update($id_users);

                if($user) {
                    $errors['global'] = MESSAGES[3];
                    header('Location: /controllers/profilCtrl.php');
                    die;
                } else {
                    $errors['global']= ERRORS[4];
                }
            }
        }
    } catch (\Throwable $th) {
    // header('Location: /controllers/errorCtrl.php');
    // die;
}

/* ************* VIEWS DISPLAY **********************************************/
include_once(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/profil.php');
include_once(__DIR__ . '/../views/templates/footer.php');
