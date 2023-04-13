<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Submodule.php');
require_once(__DIR__ . '/../../../models/Video.php');

try {

    $allSubmodules = Submodule::getAll();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        /* ************* TITLE NETTOYAGE ET VERIFICATION **************************/
        $title = trim((string)filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS));
        if(empty($title)) {
            $errors['title'] = 'Le champ est obligatoire';
        }

        /* ************* ID_SUB_MODULES NETTOYAGE ET VERIFICATION **************************/
        $id_sub_modules = intval(trim(filter_input(INPUT_POST, 'id_sub_modules', FILTER_SANITIZE_NUMBER_INT)));
        //On test si le champ n'est pas vide
        if ($id_sub_modules == 0) {
            $errors['id_sub_modules'] = ERRORS[8];
        }
        

        if (empty($errors)) {
            //**** HYDRATATION ****/
            $video = new Video;
            $video->setTitle($title);
            $video->setId_sub_modules($id_sub_modules);

            $response = $video->insert();

            // NAME VIDEOS ID

            if ($response) {
                $pdo= Database::getInstance();
                $id_videos = $pdo->lastInsertId();
            }

            if (isset($_FILES['file'])) {
                $file = $_FILES['file']['name'];
                $fileType = $_FILES['file']['type'];
                $fileError = $_FILES['file']['error'];
                
                if (!empty($file)) {
                    if ($fileError > 0) {
                        $errors['file'] = 'Erreur lors du transfert du fichier';
                    } else {
                        $extension = pathinfo($file, PATHINFO_EXTENSION);
                        $from = $_FILES['file']['tmp_name'];
                        $filename = 'video_' . $id_videos . '.' . $extension;
                        $to = __DIR__ . '/../../../public/uploads/videos/' . $filename;
                        move_uploaded_file($from, $to);
                        // var_dump($to);
                        // die;
                    }
                }
            }

            // if ($response) {
            //     $errors['global'] = 'La video a bien été ajoutée';
            //     header('Location: /controllers/dashboard/list/admin-videosCtrl.php');
            //     die;
            // }
        }


        
    }

} catch (\Throwable $th) {

    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/add/videos.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');