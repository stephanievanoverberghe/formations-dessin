<?php

require_once(__DIR__ . '/../../config/constants.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

//************************************* FILEPICTURE CLEAN AND VALIDATE ******************************************* *//
    if (isset($_FILES['filePicture'])) {
        $filePicture = $_FILES['filePicture'];
        if (!empty($filePicture['tmp_name'])) {
            if ($filePicture['error'] > 0) {
                $error["filePicture"] = "Erreur lors du transfert de fichier";
            } else {
                if (!in_array($filePicture['type'], AUTHORIZED_IMAGE_FORMAT)) {
                    $error["filePicture"] = "Le format du fichier n'est pas accepté";
                } else {
                    $extension = pathinfo($filePicture['name'], PATHINFO_EXTENSION);
                    $from = $filePicture['tmp_name'];
                    $fileName = uniqid('img_') . '.' . $extension;
                    $to = __DIR__ . '/../public/uploads/' . $fileName;
                    move_uploaded_file($from, $to);
                }
            }
        }
    }

//************************************* ADD COMMENTS ARTICLE CLEAN AND VALIDATE ********************************** *// 
    $finalExercice = trim(filter_input(INPUT_POST, 'finalExercice', FILTER_SANITIZE_SPECIAL_CHARS));
}

// Rendu des vues concernées
include_once(__DIR__ . '/../../views/templates/header.php');

if ($_SERVER["REQUEST_METHOD"] != "POST" || !empty($error)) {
    include(__DIR__ . '/../../views/formation/exercice.php');
} else {
    include(__DIR__ . '/../../views/validate.php');
}

include_once(__DIR__ . '/../../views/templates/footer.php');