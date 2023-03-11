<?php

require_once(__DIR__ . '/../../../models/Module.php');
require_once(__DIR__ . '/../../../models/Training.php');

try{
    $trainings = Training::getAll();

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
        /* ************* ID_TRAININGS NETTOYAGE ET VERIFICATION **************************/
        $id_trainings = intval(trim(filter_input(INPUT_POST, 'id_trainings', FILTER_SANITIZE_NUMBER_INT)));
        
        //On test si le champ n'est pas vide
        if ($id_trainings == 0) {
            $errors['id_trainings'] = ERRORS[6];
        }
        
        // IF NOT ERRORS, SAVE TRAINING IN DATABASE
        if(empty($errors)) {
            //**** HYDRATATION ****/
            $module = new Module;
            $module->setTitle($title);
            $module->setContent($content);
            $module->setId_trainings($id_trainings);
            
            $response = $module->insert();
            
            if($response) {
                $errors['global'] = 'Le module a bien été ajouté';
                header('Location: /controllers/dashboard/list/admin-modulesCtrl.php');
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
include(__DIR__ . '/../../../views/dashboard/add/modules.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');