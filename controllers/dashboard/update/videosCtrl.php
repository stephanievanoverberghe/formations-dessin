<?php

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Video.php');

try{
    $id_videos = intval(filter_input(INPUT_GET, 'id_videos', FILTER_SANITIZE_NUMBER_INT));

    $video = Video::getData($id_videos);

    if ($video === false) {
        $errors['global'] = ERRORS[6];
    } else {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            /* ************* TITLE NETTOYAGE ET VERIFICATION **************************/
            $title = trim((string)filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS));
            if(empty($title)) {
                $errors['title'] = 'Le champs est obligatoire';
            }
            
            
            // IF NOT ERRORS, SAVE TRAINING IN DATABASE
            if(empty($errors)) {
                //**** HYDRATATION ****/
                $video = new Video;
                $video->setTitle($title);

                $video = $video->update($id_videos);
                
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

                if($video) {
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
    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/add/videos.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');