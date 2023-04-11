<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../models/Comment.php');

try {

    $id_comments = intval(filter_input(INPUT_GET, 'id_comments', FILTER_SANITIZE_NUMBER_INT));
    $comment = Comment::getData($id_comments);

    if($_SERVER['REQUEST_METHOD'] == 'POST') { 
        $validatComment = Comment::validateComment($id_comments);
        if ($validatComment) {
            // Commentaire validé avec succès
            $errors['global'] = 'Le commentaire a bien été validé';
            header("Location: /controllers/dashboard/list/admin-commentsCtrl.php");
            exit();
        } else {
            // Erreur lors de la validation du commentaire
            header("Location: /controllers/errorCtrl.php");
            exit();
        }
        
    }
    
    
} catch (\Throwable $th) {
    header('Location: /controllers/errorCtrl.php');
    die;
}

/* ************* VIEWS DISPLAY **********************************************/

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/edit/comments.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');