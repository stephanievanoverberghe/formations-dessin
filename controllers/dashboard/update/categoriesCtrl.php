<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Category.php');


try{
    
    $id_categories = intval(filter_input(INPUT_GET, 'id_categories', FILTER_SANITIZE_NUMBER_INT));
    $categories = Category::getData($id_categories);
    
    if ($categories === false) {
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
                $category = new Category;
                $category->setTitle($title);
                $category->setContent($content);
                
                $category = $category->update($id_categories);
                
                if($category) {
                    $errors['global'] = MESSAGES[3];
                    header('Location: /controllers/dashboard/list/admin-categoriesCtrl.php');
                    die;
                } else {
                    $errors['global']= ERRORS[4];
                }
            }
        }
    }
    $category = Category::getData($id_categories);
    
} catch (\Throwable $th) {
var_dump($th);
die;
    // header('Location: /controllers/errorCtrl.php');
    // die;
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/add/categories.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');