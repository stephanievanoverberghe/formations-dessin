<?php

require_once(__DIR__ . '/../../../models/Training.php');
require_once(__DIR__ . '/../../../models/Module.php');

try{
    $training = true;
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        /* ************* TITLE NETTOYAGE ET VERIFICATION **************************/
        $title = trim((string)filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS));
        if(empty($title)) {
            $errors['title'] = 'Le champs est obligatoire';
        }
        /* ************* CONTENT NETTOYAGE ET VERIFICATION **************************/
        $content = trim((string)filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));
        if(empty($content)) {
            $errors['content'] = 'Le champs est obligatoire';
        }

        // IF NOT ERRORS, SAVE TRAINING IN DATABASE
        if(empty($errors)) {
            //**** HYDRATATION ****/
            $training = new Training;
            $training->setTitle($title);
            $training->setContent($content);
            
            $response = $training->insert();
            
            if($response) {
                $errors['global'] = 'La formation a bien été ajouté';
                header('Location: /controllers/dashboard/list/admin-trainingsCtrl.php');
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
include(__DIR__ . '/../../../views/dashboard/add/trainings.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');