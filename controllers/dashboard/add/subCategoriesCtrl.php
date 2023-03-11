<?php

require_once(__DIR__ . '/../../../config/constants.php');
require_once(__DIR__ . '/../../../models/Subcategorie.php');

try{
    $subcategory = true;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        /* ************* TITLE NETTOYAGE ET VERIFICATION **************************/
        $title = trim((string)filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS));
        if(empty($title)) {
            $errors['title'] = 'Le champs est obligatoire';
        }
        /* ************* SLUG NETTOYAGE ET VERIFICATION **************************/
        $slug = trim((string)filter_input(INPUT_POST, 'slug', FILTER_SANITIZE_SPECIAL_CHARS));
        if(empty($slug)) {
            $errors['slug'] = 'Le champs est obligatoire';
        }
        
        // IF NOT ERRORS, SAVE CATEGORIE IN DATABASE
        if(empty($errors)) {
            //**** HYDRATATION ****/
            $subcategory = new Subcategory;
            $subcategory->setTitle($title);
            $subcategory->setSlug($slug);

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