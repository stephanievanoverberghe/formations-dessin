<?php

require_once(__DIR__ . '/../../../config/constants.php');
require_once(__DIR__ . '/../../../models/Article.php');

try{
    $article = true;

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
        /* ************* CONTENT NETTOYAGE ET VERIFICATION **************************/
        $content = trim((string)filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));
        if(empty($content)) {
            $errors['content'] = 'Le champs est obligatoire';
        }
        /* ************* CREATED_AT NETTOYAGE ET VERIFICATION **************************/
        $created_at = trim((string)filter_input(INPUT_POST, 'created_at', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));
        if(empty($created_at)) {
            $errors['created_at'] = 'Le champs est obligatoire';
        }
        
        // IF NOT ERRORS, SAVE CATEGORIE IN DATABASE
        if(empty($errors)) {
            //**** HYDRATATION ****/
            $article = new Article;
            $article->setTitle($title);
            $article->setSlug($slug);
            $article->setContent($content);
            $article->setCreated_at($created_at);
            
            $response = $article->insert();
            
            if($response) {
                $errors['global'] = 'L\'article a bien été créé';
            }
        }
    }
    
} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/add/articles.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');
