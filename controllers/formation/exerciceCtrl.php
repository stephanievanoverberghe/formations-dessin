<?php

require_once(__DIR__ . '/../../config/constants.php');
require_once(__DIR__ . '/../../models/Training.php');
require_once(__DIR__ . '/../../models/Module.php');

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

try {
    $id_trainings = intval(filter_input(INPUT_GET, 'id_trainings', FILTER_SANITIZE_NUMBER_INT));
    $id_modules = 8;
    $trainings = Training::getData($id_trainings, $id_modules);

    
} catch (\Throwable $th) {
    header('location: /controllers/errorCtrl.php');
    die;
}

// Rendu des vues concernées
include_once(__DIR__ . '/../../views/templates/header.php');
include(__DIR__ . '/../../views/formation/exercice.php');
include_once(__DIR__ . '/../../views/templates/footer.php');