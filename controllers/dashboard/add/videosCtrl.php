<?php

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
        $file = trim((string)filter_input(INPUT_POST, 'file', FILTER_SANITIZE_SPECIAL_CHARS));
        
        if (isset($_FILES['file'])) {
            $file = $_FILES['file']['name'];
            $fileType = $_FILES['file']['type'];
            $fileError = $_FILES['file']['error'];
            
            if (!empty($file)) {
                if ($file['error'] > 0) {
                    $errors['file'] = 'Erreur lors du transfert du fichier';
                } else {
                    $extension = pathinfo($file, PATHINFO_EXTENSION);
                    $from = $_FILES['file']['tmp_name'];
                    $filename = uniqid('video_' . '.' . $extension);
                    $to = './public/video' . $filename;
                    move_uploaded_file($from, $to);
                }
            }
        }
        if (empty($errors)) {
            //**** HYDRATATION ****/
            $video = new Video;
            $video->setTitle($title);
            $video->setFile($file);

            $response = $video->insert();

            if ($response) {
                header('Location: /controllers/dashboard/list/admin-videosCtrl.php');
                die;
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