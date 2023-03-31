<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Training.php');

try{
    $id_trainings = intval(filter_input(INPUT_GET, 'id_trainings', FILTER_SANITIZE_NUMBER_INT));

    $training = Training::getDataTraining($id_trainings);
    
    if ($training === false) {
        $errors['global'] = ERRORS[6];
    } else {
        
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
                
                $training = $training->update($id_trainings);
                
                if($training) {
                    $errors['global'] = MESSAGES[3];
                    header('Location: /controllers/dashboard/list/admin-trainingsCtrl.php');
                    die;
                } else {
                    $errors['global']= ERRORS[4];
                }
            }
        }
    }
    $training = Training::getDataTraining($id_trainings);
    
} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/add/trainings.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');