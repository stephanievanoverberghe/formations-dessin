<?php

session_start();
if ($_SESSION['user']->admin != 1) {
    header('location: 404Ctrl.php');
    die;
}

require_once(__DIR__ . '/../../../config/constants.php');
require_once(__DIR__ . '/../../../config/config.php');
require_once(__DIR__ . '/../../../models/Submodule.php');
require_once(__DIR__ . '/../../../models/Module.php');

try {
    $search = trim((string)filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS));
    
    $limit = NB_ELEMENTS_BY_PAGE;
    
    // A recuperer depuis paramètre d'url. Si aucune valeur, alors vaut 1
    $page = intval(filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT));
    
    // Si la valeur de la page demandée n'est pas cohérente, on réinitialise à 0
    if (empty($page)) {
        $page = 1;
    }
    
    //Définit à partir de quel enregistrement positionner le curseur (l'offset) dans la requête
    $offset = $limit * ($page - 1);
    
    $submodules = Submodule::getAll($search, $limit, $offset);
    
    $nbPageTotal = Submodule::getAllCount($search);
    
    $pageNb = ceil(count($nbPageTotal) / $limit);
    
} catch (\Throwable $th) {
    // var_dump($th);
    // die;
    header('location: /controllers/errorCtrl.php');
    die;
}

include_once(__DIR__ . '/../../../views/templates/admin-header.php');
include(__DIR__ . '/../../../views/dashboard/list/admin-submodules.php');
include_once(__DIR__ . '/../../../views/templates/admin-footer.php');