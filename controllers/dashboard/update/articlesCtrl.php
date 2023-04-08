<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Article.php');

try {

    $id_articles = intval(filter_input(INPUT_GET, 'id_articles', FILTER_SANITIZE_NUMBER_INT));
    $articles = Article::getData($id_articles);



    if ($articles === false) {
        $errors['global'] = ERRORS[6];
    } else {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            /* ************* TITLE NETTOYAGE ET VERIFICATION **************************/
            $title = trim((string)filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS));
            if (empty($title)) {
                $errors['title'] = 'Le champs est obligatoire';
            }
            /* ************* HOOK NETTOYAGE ET VERIFICATION **************************/
            $hook = trim((string)filter_input(INPUT_POST, 'textareaHook', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));
            if (empty($hook)) {
                $errors['textareaHook'] = 'Le champs est obligatoire';
            }
            /* ************* SUBTITLE NETTOYAGE ET VERIFICATION **************************/
            $subtitle = filter_input(INPUT_POST, 'subtitle', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
            if (empty($subtitle)) {
                $errors['subtitle'] = 'Le champs est obligatoire';
            }
            $subtitle = serialize($subtitle);
            /* ************* CONTENT NETTOYAGE ET VERIFICATION **************************/
            $content = filter_input(INPUT_POST, 'textareaContent', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
            if (empty($content)) {
                $errors['textareaContent'] = 'Le champs est obligatoire';
            }
            $content = serialize($content);
            /* ************* CONCLUSION NETTOYAGE ET VERIFICATION **************************/
            $conclusion = trim((string)filter_input(INPUT_POST, 'textareaConclusion', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));
            if (empty($conclusion)) {
                $errors['textareaConclusion'] = 'Le champs est obligatoire';
            }
            /* ************* EXCERPT NETTOYAGE ET VERIFICATION **************************/
            $excerpt = trim((string)filter_input(INPUT_POST, 'textareaExcerpt', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));
            if (empty($excerpt)) {
                $errors['textareaExcerpt'] = 'Le champs est obligatoire';
            }


            // IF NOT ERRORS, SAVE TRAINING IN DATABASE
            if (empty($errors)) {
                //**** HYDRATATION ****/
                $article = new Article;
                $article->setTitle($title);
                $article->setHook($hook);
                $article->setSubtitle($subtitle);
                $article->setContent($content);
                $article->setConclusion($conclusion);
                $article->setExcerpt($excerpt);

                $response = $article->update($id_articles);

                if ($response) {
                    $errors['global'] = MESSAGES[3];
                    header('Location: /controllers/dashboard/list/admin-articlesCtrl.php');
                    die;
                } else {
                    $errors['global'] = ERRORS[4];
                }
            }
        }
    }
    $article = Article::getData($id_articles);
} catch (\Throwable $th) {
    var_dump($th);
    die;
    // header('Location: /controllers/errorCtrl.php');
    // die;
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/add/articles.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');
