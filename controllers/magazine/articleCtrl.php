<?php

require_once(__DIR__ . '/../../config/constants.php');
require_once(__DIR__ . '/../../config/config.php');
require_once(__DIR__ . '/../../models/Article.php');
require_once(__DIR__ . '/../../models/Comment.php');
require_once(__DIR__ . '/../../models/User.php');
require_once(__DIR__ . '/../../models/Article.php');


try {

    
    // $users = User::getData($id_users);

    
    $id_articles = intval(filter_input(INPUT_GET, 'id_articles', FILTER_SANITIZE_NUMBER_INT));
    $article = Article::getData($id_articles);
    $serialized_data = Article::getDataSerialized($id_articles);
    $article_data = unserialize($serialized_data);
    
    $articles = Article::getAll();
    $last_three_articles = array_slice($articles, -3);
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        /* ************* TITLE NETTOYAGE ET VERIFICATION **************************/
        $title = trim((string)filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS));
        if(empty($title)) {
            $errors['title'] = 'Le champs est obligatoire';
        }
        /* ************* CONCLUSION NETTOYAGE ET VERIFICATION **************************/
        $content = trim((string)filter_input(INPUT_POST, 'contentArticle', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));
        if(empty($content)) {
            $errors['content'] = 'Le champs est obligatoire';
        }
        /* ************* ID_USERS NETTOYAGE ET VERIFICATION **************************/

        $id_articles = intval(filter_input(INPUT_GET, 'id_articles', FILTER_SANITIZE_NUMBER_INT));
        
        $errors = [];
        $user = $_SESSION['user'];
        $id_users = $user->id_users;
        
        
        // IF NOT ERRORS, SAVE CATEGORIE IN DATABASE
        if(empty($errors)) {
            //**** HYDRATATION ****/
            $comment = new Comment;
            $comment->setTitle($title);
            $comment->setContent($content);
            $comment->setId_users($id_users);
            $comment->setId_articles($id_articles);
            
            $response = $comment->insert();
            
            if($response) {
                $errors['global'] = 'Le commentaire a été envoyé pour validation.';
            }
        }
    }
} catch (\Throwable $th) {
    var_dump($th );
    die;
    // header('Location: /controllers/errorCtrl.php');
    // die;
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../views/templates/header.php');
include(__DIR__ . '/../../views/magazine/article.php');
include_once(__DIR__ . '/../../views/templates/footer.php');
