<?php
// var_dump($_FILES);
// die;

session_start();

require_once(__DIR__ . '/../config/constants.php');
require_once(__DIR__ . '/../models/User.php');

try {

    $errors = [];
    $user = $_SESSION['user'];
    $id_users = $user->id_users;



    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['formUpdateInfo'])) {
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

            if (empty($errors)) {
                //HYDRATATION
                $user = new User;
                $user->setLastname($lastname);
                $user->setFirstname($firstname);
                $user->setPseudo($pseudo);
                $user->setBirthdate($birthdate);
                $user->setCountry($country);

                $result = $user->update($id_users);

                if ($result) {
                    $errors['global'] = 'Le profil a bien été modifié';
                    $_SESSION['user'] = User::getData($id_users);
                    header('Location: /controllers/profilCtrl.php');
                    die;
                }
            }
        } else if (isset($_POST['formUpdateEmail'])) {
            /* ************* EMAIL NETTOYAGE ET VERIFICATION **************************/
            $email = trim((string)filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS));

            // //     /* ************* CONFIRMEMAIL NETTOYAGE ET VERIFICATION **************************/
            // $newEmail = trim((string)filter_input(INPUT_POST, 'newEmail', FILTER_SANITIZE_SPECIAL_CHARS));

            if (empty($email)) {
                $errors['email'] = 'Le champ est obligatoire !';
            } else {
                $isOk = filter_var($email, FILTER_VALIDATE_EMAIL);
                if (!$isOk) {
                    $errors['email'] = 'Le mail n\'est pas valide !';
                }
                if (User::isEmailExists($email)) {
                    $errors['email'] = 'Cet email existe déjà !';
                }
            }

            if (empty($errors)) {
                //HYDRATATION
                $user = new User;
                $user->setEmail($email);

                $result = $user->updateEmail($id_users);
                // var_dump($user);
                // die;

                if ($result) {
                    $errors['global'] = 'Le profil a bien été modifié';
                    $_SESSION['user'] = User::getData($id_users);
                    header('Location: /controllers/profilCtrl.php');
                    die;
                } else {
                    $errors['global'] = 'Impossible de mettre à jour l\'adresse e-mail';
                }
            }
        } else {
            /* ************* PASSWORD NETTOYAGE ET VERIFICATION **************************/
            $password = filter_input(INPUT_POST, 'password');

            $newPassword = filter_input(INPUT_POST, 'newPassword');
            $passwordCheck = filter_input(INPUT_POST, 'passwordCheck');
            if ($newPassword != $passwordCheck) {
                $errors['newPassword'] = "Les mots de passe ne correspondent pas";
            }
            $passwordHash = password_hash((string) $newPassword, PASSWORD_DEFAULT);

            if (empty($errors)) {
                // HYDRATATION
                $user = new User;
                $user->setPassword($passwordHash);

                $result = $user->updatePassword($id_users);

                if ($result) {
                    $errors['global'] = 'Le profil a bien été modifié';
                    $_SESSION['user'] = User::getData($id_users);
                    header('Location: /controllers/profilCtrl.php');
                    die;
                } else {
                    $errors['global'] = 'Impossible de mettre à jour l\'adresse e-mail';
                }
            }
        }

        //     


    }
} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}

try {

    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     if (isset($_POST['formPictureGallery'])) {

    //         //     // GALLERY

    //         if (isset($_FILES['pictureGalleryUpload'])) {
    //             $file = $_FILES['pictureGalleryUpload'];
    //             var_dump($file);
    //             die;
    //             if (!empty($file['tmp_name'])) {
    //                 if ($file['error'] > 0) {
    //                     $errors['pictureGalleryUpload'] = 'Erreur lors du transfert de fichier';
    //                 } else {
    //                     if (!in_array($file['type'], EXTENSIONS)) {
    //                         $errors['pictureGalleryUpload'] = 'Le format du fichier n\'est pas accepté';
    //                     } else {
    //                         $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    //                         $from = $file['tmp_name'];
    //                         $filename = uniqid('gallery_') . '.' . $extension;
    //                         $to = __DIR__ . '/../public/uploads/users/gallery/' . $filename;
    //                         move_uploaded_file($from, $to);
    //                     }
    //                 }
    //             }
    //         }
            //     if (!isset($_FILES['pictureGalleryUpload'])) {
            //         throw new Exception('Erreur générale');
            //     }
            //     if ($_FILES['pictureGalleryUpload']['error'] == 4) {
            //         throw new Exception('La photo est obligatoire');
            //     }
            //     if ($_FILES['pictureGalleryUpload']['error'] > 0) {
            //         throw new Exception('Une erreur lors du transfert s\'est produite');
            //     }
            //     if (!in_array($_FILES['pictureGalleryUpload']['type'], EXTENSIONS)) {
            //         throw new Exception('Le format de l\'image n\'est pas bon');
            //     }
            //     if ($_FILES['pictureGalleryUpload']['size'] > MAX_FILESIZE) {
            //         throw new Exception('Poids du fichier image trop élevé');
            //     }


            //     $extension = pathinfo($_FILES['pictureGalleryUpload']['name'], PATHINFO_EXTENSION);
            //     $from = $_FILES['pictureGalleryUpload']['tmp_name'];
            //     $filename = uniqid('gallery_') . '.' . $extension;
            //     $to = LOCATION_USERS_GALLERY . $filename;
            //     move_uploaded_file($from, $to);

} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAY **********************************************/
include_once(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/profil.php');
include_once(__DIR__ . '/../views/templates/footer.php');
