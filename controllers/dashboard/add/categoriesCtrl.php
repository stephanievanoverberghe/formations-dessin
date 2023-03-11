<?php

require_once(__DIR__ . '/../../../config/constants.php');
require_once(__DIR__ . '/../../../models/Categorie.php');

try{
    $category = true;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        /* ************* TITLE NETTOYAGE ET VERIFICATION **************************/
        $title = trim((string)filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS));
        if(empty($title)) {
            $errors['title'] = 'Le champs est obligatoire';
        }
        /* ************* SLUG NETTOYAGE ET VERIFICATION **************************/
        $slug = trim((string)filter_input(INPUT_POST, 'slug', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));
        if(empty($slug)) {
            $errors['slug'] = 'Le champs est obligatoire';
        }
        
        // IF NOT ERRORS, SAVE CATEGORIE IN DATABASE
        if(empty($errors)) {
            //**** HYDRATATION ****/
            $category = new Category;
            $category->setTitle($title);
            $category->setSlug($slug);

            $response = $category->insert();
            
            if($response) {
                $errors['global'] = 'La catégorie a bien été ajouté';
                header('Location: /controllers/dashboard/list/admin-categoriesCtrl.php');
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
include(__DIR__ . '/../../../views/dashboard/add/categories.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');