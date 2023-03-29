<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404.php');
    die;
}

require_once(__DIR__ . '/../../../models/Video.php');

try {
    $video = true;
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        /* ************* TITLE NETTOYAGE ET VERIFICATION **************************/
        $title = trim((string)filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS));
        if(empty($title)) {
            $errors['title'] = 'Le champs est obligatoire';
        }
        /* ************* VIDEOFILE NETTOYAGE ET VERIFICATION **********************/
        
        if (empty($errors)) {
            //**** HYDRATATION ****/
            $video = new Video;
            $video->setTitle($title);

            $response = $video->insert();
            
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

            if ($response) {
                // header('Location: /controllers/dashboard/list/admin-videosCtrl.php');
                // die;
            }
        }
    }

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