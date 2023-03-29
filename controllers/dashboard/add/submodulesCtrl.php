<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Submodule.php');
require_once(__DIR__ . '/../../../models/Module.php');

try{
    $allModules = Module::getAll();


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
        /* ************* ID_MODULES NETTOYAGE ET VERIFICATION **************************/
        $id_modules = intval(trim(filter_input(INPUT_POST, 'id_modules', FILTER_SANITIZE_NUMBER_INT)));
        //On test si le champ n'est pas vide
        if ($id_modules == 0) {
            $errors['id_modules'] = ERRORS[8];
        }

        // IF NOT ERRORS, SAVE TRAINING IN DATABASE
        if(empty($errors)) {
            //**** HYDRATATION ****/
            $submodule = new Submodule;
            $submodule->setTitle($title);
            $submodule->setContent($content);
            $submodule->setId_modules($id_modules);

            $response = $submodule->insert();
            
            if($response) {
                $errors['global'] = 'Le sous module a bien été ajouté';
                header('Location: /controllers/dashboard/list/admin-submodulesCtrl.php');
                die;
            }
        }

    }
    
} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/add/submodules.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');