<?php 

// INITIALIZATION DATA BASE
define('DSN', 'mysql:host=localhost;dbname=formationsdessins;charset=utf8mb4;port=3306');
define('LOGIN', 'steffievano');
define('PASSWORD', '2D@chB3Bek]CR/h[');

// INITIALIZATION ERRORS
define('ERRORS', [
    0=>'Une erreur inconnue s\'est produite',
    1=>'Problème de connexion à la BDD',
    2=>'Erreur lors de la récupération du compte utilisateur',
    3=>'Compte non trouvé',
    4=>'Aucune mise à jour n\'a été effectuée',
    5=>'Compte utilisateur non mis à jour, ce compte existe déjà',
    6=>'Erreur lors de la récupération de la formation',
    7=>'Module non créé',
    8=>'Erreur lors de la récupération du module',
]);

// INITIALIZATION MESSAGES
define('MESSAGES', [
    1=>'Le compte a été mis à jour',
    2=>'Le module a bien été ajouté',
    3=>'La formation a bien été mis à jour',
]);