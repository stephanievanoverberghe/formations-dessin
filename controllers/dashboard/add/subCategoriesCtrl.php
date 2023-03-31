<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/constants.php');
require_once(__DIR__ . '/../../../models/Subcategory.php');
require_once(__DIR__ . '/../../../models/Category.php');

try{
    // Appel de la méthode static pour récupérer toutes les catégories
    $allCategories = Category::getAll();

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
        $id_categories = intval(trim(filter_input(INPUT_POST, 'id_categories', FILTER_SANITIZE_NUMBER_INT)));
        
        // IF NOT ERRORS, SAVE SUBCATEGORIES IN DATABASE
        if(empty($errors)) {
            //**** HYDRATATION ****/
            $subcategory = new Subcategory;
            $subcategory->setTitle($title);
            $subcategory->setContent($content);
            $subcategory->setId_categories($id_categories);

            $response = $subcategory->insert();
            
            if($response) {
                $errors['global'] = 'La sous-catégorie a bien été ajoutée.';
                header('Location: /controllers/dashboard/list/admin-subcategoriesCtrl.php');
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
include(__DIR__ . '/../../../views/dashboard/add/subCategories.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');