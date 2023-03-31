<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Submodule.php');
require_once(__DIR__ . '/../../../models/Video.php');
require_once(__DIR__ . '/../../../models/Submodule_video.php');

try{
    $allSubmodules = Submodule::getAll();
    $allVideos = Video::getAll();
    $submodules_videos = Submodule_video::getAll();
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        
        /* ************* ID_SUB_MODULES NETTOYAGE ET VERIFICATION **************************/
        $id_sub_modules = intval(trim(filter_input(INPUT_POST, 'id_sub_modules', FILTER_SANITIZE_NUMBER_INT)));
        //On test si le champ n'est pas vide
        if ($id_sub_modules == 0) {
            $errors['id_sub_modules'] = ERRORS[8];
        }
        /* ************* ID_VIDEOS NETTOYAGE ET VERIFICATION **************************/
        $id_videos = intval(trim(filter_input(INPUT_POST, 'id_videos', FILTER_SANITIZE_NUMBER_INT)));
        //On test si le champ n'est pas vide
        if ($id_videos == 0) {
            $errors['id_videos'] = ERRORS[8];
        }
        
        // IF NOT ERRORS, SAVE TRAINING IN DATABASE
        if(empty($errors)) {
            // **** HYDRATATION ****//
            $submodules_videos = new Submodule_video;
            $submodules_videos->setId_sub_modules($id_sub_modules);
            $submodules_videos->setId_videos($id_videos);
            
            $response = $submodules_videos->insert();
            
            if($response) {
                $errors['global'] = 'La sous module et la vidéo ont bien été ajouté';
                header('Location: /controllers/dashboard/list/admin-videos-submodulesCtrl.php');
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
include(__DIR__ . '/../../../views/dashboard/add/videos-submodules.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');