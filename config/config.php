<?php 



// INITIALIZATION DATA BASE
define('DSN', 'mysql:host=localhost;dbname=formationsdessins;charset=utf8mb4;port=3306');
define('LOGIN', 'steffievano');
define('PASSWORD', '2D@chB3Bek]CR/h[');

// INITIALIZATION PAGINATION
define('NB_ELEMENTS_BY_PAGE', 6);

// INITIALIZATION ERRORS
define('ERRORS', [
    0=>'Une erreur inconnue s\'est produite',
    1=>'Problème de connexion à la BDD',
    2=>'Erreur lors de la récupération du compte utilisateur',
    3=>'Compte non trouvé',
    4=>'Aucune mise à jour n\'a été effectuée',
    5=>'Compte utilisateur non mis à jour, ce compte existe déjà',
    6=>'Erreur lors de la récupération des données',
    7=>'Formation non créé',
    8=>'Module non créé',
    9=>'Sous-module non créé',
    10=>'Echec lors de la suppression.'
]);

// INITIALIZATION MESSAGES
define('MESSAGES', [
    1=>'Le compte a été créé.',
    2=>'Le compte a bien été mis à jour.',
    3=>'La formation a bien été ajouté.',
    4=>'Le module a bien été ajouté.',
    5=>'Le sous-module a bien été ajouté.',
    6=>'La formation a bien été mis à jour.',
    7=>'Le module a bien été mis à jour.',
    8=>'Le sous-module a bien été mis à jour',
    9=>'La formation a bien été supprimée.',
    10=>'Le module a bien été supprimé.',
    11=>'Le sous-module a bien été supprimé.',
    
]);