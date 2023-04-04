<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Video.php');
require_once(__DIR__ . '/../../../models/Submodule.php');

try{

    $allSubmodules = Submodule::getAll();
    $id_videos = intval(filter_input(INPUT_GET, 'id_videos', FILTER_SANITIZE_NUMBER_INT));
    $videos = Video::getData($id_videos);

    if ($videos === false) {
        $errors['global'] = ERRORS[6];
    } else {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            /* ************* TITLE NETTOYAGE ET VERIFICATION **************************/
            $title = trim((string)filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS));
            if(empty($title)) {
                $errors['title'] = 'Le champs est obligatoire';
            }
            /* ************* ID_SUB_MODULES NETTOYAGE ET VERIFICATION **************************/
            $id_sub_modules = intval(trim(filter_input(INPUT_POST, 'id_sub_modules', FILTER_SANITIZE_NUMBER_INT)));
            if($id_sub_modules == 0) {
                $errors['id_sub_modules'] = ERRORS[8];
            }
            
            
            // IF NOT ERRORS, SAVE TRAINING IN DATABASE
            if(empty($errors)) {
                //**** HYDRATATION ****/
                $video = new Video;
                $video->setTitle($title);
                $video->setId_sub_modules($id_sub_modules);

                $response = $video->update($id_videos);
                
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
                            $filename = uniqid('video_') . '.' . $extension;
                            $to = __DIR__ . '/../../../public/uploads/videos/' . $filename;
                            move_uploaded_file($from, $to);
                            // var_dump($to);
                            // die;
                        }
                    }
                }

                if($response) {
                    $errors['global'] = MESSAGES[3];
                    header('Location: /controllers/dashboard/list/admin-videosCtrl.php');
                    die;
                } else {
                    $errors['global']= ERRORS[4];
                }
            }
        }
    }
    $video = Video::getData($id_videos);
    
} catch (\Throwable $th) {
    var_dump($th);
    die;
    // header('Location: /controllers/errorCtrl.php');
    // die;
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/add/videos.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');