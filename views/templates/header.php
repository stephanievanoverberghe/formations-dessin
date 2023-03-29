<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <title>Formations Dessins</title>
</head>

<body>

    <!-- Début du header -->

    <header id="navbar">

        <!-- Début navBar -->

        <nav class="navbar navbar-expand-xxl navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand mx-md-5" href="/">
                    <img class="logo" src="/public/assets/img/logo.png" alt="Logo du site">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-lg-5">
                            <a class="nav-link" aria-current="page" href="/controllers/formation/formationCtrl.php">Formation</a>
                        </li>
                        <li class="nav-item me-lg-5">
                            <a class="nav-link" aria-current="page" href="/controllers/forum/forumCtrl.php">Forums</a>
                        </li>
                        <li class="nav-item me-lg-5">
                            <a class="nav-link" aria-current="page" href="/controllers/magazine/magazineCtrl.php">Magazine</a>
                        </li>
                    </ul>
                    
                    <a class="btn btn-outline border border-3 btn-lg me-lg-3" href="/controllers/dashboard/list/admin-usersCtrl.php" role="button">Admin</a>
                    
                    <?php
                    if(!isset($_SESSION['user'])) {
                    ?>
                        <a class="btn btn-outline border border-3 btn-lg me-lg-3" href="/controllers/sign/signInCtrl.php" role="button">Se connecter</a>
                        <a class="btn btn-outline border border-3 btn-lg me-lg-5" href="/controllers/sign/signUpCtrl.php" role="button">S'inscrire</a>
                    <?php } else { ?>
                        <a class="btn btn-outline border border-3 btn-lg me-lg-3" href="/controllers/profilCtrl.php" role="button">Profil</a>
                        <a class="btn btn-outline border border-3 btn-lg me-lg-3" href="/controllers/sign/signOutCtrl.php" role="button">Se déconnecter</a>
                    <?php } ?>
                </div>
            </div>
        </nav>
    </header>