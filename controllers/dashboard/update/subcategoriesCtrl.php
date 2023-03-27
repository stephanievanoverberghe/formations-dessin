<?php

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Subcategory.php');
require_once(__DIR__ . '/../../../models/Category.php');


try{
    
    $allCategories = Category::getAll();
    
    $id_sub_categories = intval(filter_input(INPUT_GET, 'id_sub_categories', FILTER_SANITIZE_NUMBER_INT));
    $subcategories = Subcategory::getData($id_sub_categories);

    

    if ($subcategories === false) {
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
            /* ************* ID_CATEGORIES NETTOYAGE ET VERIFICATION **************************/
            $id_categories = intval(trim(filter_input(INPUT_POST, 'id_categories', FILTER_SANITIZE_NUMBER_INT)));
            if($id_categories == 0) {
                $errors['id_categories'] = ERRORS[8];
            }

            // IF NOT ERRORS, SAVE TRAINING IN DATABASE
            if(empty($errors)) {
                //**** HYDRATATION ****/
                $subcategory = new Subcategory;
                $subcategory->setTitle($title);
                $subcategory->setContent($content);
                $subcategory->setId_categories($id_categories);

                $subcategory = $subcategory->update($id_sub_categories);
                
                if($subcategory) {
                    $errors['global'] = MESSAGES[3];
                    header('Location: /controllers/dashboard/list/admin-subcategoriesCtrl.php');
                    die;
                } else {
                    $errors['global']= ERRORS[4];
                }
            }
        }
    }
    $subcategory = Subcategory::getData($id_sub_categories);
    
} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/add/subCategories.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');