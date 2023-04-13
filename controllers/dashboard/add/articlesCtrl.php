<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/constants.php');
require_once(__DIR__ . '/../../../models/Article.php');

try {
    $article = true;

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

        // IF NOT ERRORS, SAVE CATEGORIE IN DATABASE
        if (empty($errors)) {
            //**** HYDRATATION ****/
            $article = new Article;
            $article->setTitle($title);
            $article->setHook($hook);
            $article->setSubtitle($subtitle);
            $article->setContent($content);
            $article->setConclusion($conclusion);
            $article->setExcerpt($excerpt);

            $response = $article->insert();

            if ($response) {
                $pdo = Database::getInstance();
                $id_articles = $pdo->lastInsertId();
            }

            if (isset($_FILES['file'])) {
                $file = $_FILES['file']['name'];
                $fileType = $_FILES['file']['type'];
                $fileError = $_FILES['file']['error'];

                if (!empty($file)) {
                    if ($fileError > 0) {
                        $errors['file'] = 'Erreur lors du transfert du fichier';
                    } else {
                        $extension = pathinfo($file, PATHINFO_EXTENSION);
                        $from = $_FILES['file']['tmp_name'];
                        $filename = 'thumbnail_' . $id_articles . '.' . $extension;
                        $to = __DIR__ . '/../../../public/uploads/articles/thumbnails/' . $filename;
                        move_uploaded_file($from, $to);
                    }
                }
            }

            if ($response) {
                header('Location: /controllers/dashboard/list/admin-articlesCtrl.php');
                $errors['global'] = 'L\'article a bien été ajouté';
                // die;
            }

            // if (isset($_FILES['picture'])) {
            //     $file = $_FILES['picture']['name'];
            //     $fileType = $_FILES['picture']['type'];
            //     $fileError = $_FILES['picture']['error'];

            //     if (!empty($file)) {
            //         if ($fileError > 0) {
            //             $errors['picture'] = 'Erreur lors du transfert du fichier';
            //         } else {
            //             $extension = pathinfo($file, PATHINFO_EXTENSION);
            //             $from = $_FILES['picture']['tmp_name'];
            //             $filename = 'picture_' . $id_articles . '.' . $extension;
            //             $to = __DIR__ . '/../../../public/uploads/articles/' . $filename;
            //             move_uploaded_file($from, $to);
            //             // var_dump($to);
            //             // die;
            //         }
            //     }
            // }
        }
    }
} catch (\Throwable $th) {
    // header('Location: /controllers/errorCtrl.php');
    // die;
}

/* ************* VIEWS DISPLAYS **************************/
include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/add/articles.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');
