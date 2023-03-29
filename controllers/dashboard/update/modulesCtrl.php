<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Module.php');
require_once(__DIR__ . '/../../../models/Training.php');

try{
    
    
    // Appel de la méthode static pour récupérer toutes les formations
    $allTrainings = Training::getAll();

    $id_modules = intval(filter_input(INPUT_GET, 'id_modules', FILTER_SANITIZE_NUMBER_INT));
    $module = Module::getData($id_modules);

    
    if ($module === false) {
        $errors['global'] = ERRORS[8];
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
            /* ************* ID_TRAINING NETTOYAGE ET VERIFICATION **************************/
            $id_trainings = intval(trim(filter_input(INPUT_POST, 'id_trainings', FILTER_SANITIZE_NUMBER_INT)));
            if($id_trainings == 0) {
                $errors['id_trainings'] = ERRORS[8];
            }
            
            // IF NOT ERRORS, SAVE TRAINING IN DATABASE
            if(empty($errors)) {
                //**** HYDRATATION ****/
                $module = new Module;
                $module->setTitle($title);
                $module->setContent($content);
                $module->setId_trainings($id_trainings);
                
                $module = $module->update($id_modules);
                
                if($module) {
                    $errors['global'] = MESSAGES[3];
                    header('Location: /controllers/dashboard/list/admin-modulesCtrl.php');
                    die;
                } else {
                    $errors['global']= ERRORS[4];
                }
            }
        }
    }
    $module = Module::getData($id_modules);
    
} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/add/modules.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');