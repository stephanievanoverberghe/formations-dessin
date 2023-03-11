<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <title>Formations Dessins</title>
</head>

<body>

    <!-- Start header -->

    <header id="header">

        <!-- Start navBar -->

        <button class="buttonDash my-4 mx-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDark"><i class="bi bi-list"></i> Menu</button>

        <div class="offcanvas offcanvas-start show text-bg-dark" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="d-flex justify-content-center my-5">
                    <a href="/controllers/homeCtrl.php">
                        <img src="/public/assets/img/logo.png" alt="Logo du site" class="logo">
                    </a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="nav-item mt-5">
                        <a class="nav-link" aria-current="page" href="/controllers/dashboard/list/admin-usersCtrl.php">
                            <i class="bi bi-people-fill"></i>
                            <span>Utilisateurs</span>
                        </a>
                    </li>
                    <li class="nav-item mt-5">
                        <a class="nav-link dropdown-toggle" role="button" aria-current="page" href="" data-bs-toggle="dropdown">
                            <i class="bi bi-camera-reels-fill"></i>
                            <span class="dropdown">Formations</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/controllers/dashboard/list/admin-trainingsCtrl.php" class="dropdown-item">Formations</a></li>
                            <li><a href="/controllers/dashboard/list/admin-modulesCtrl.php" class="dropdown-item">Modules</a></li>
                            <li><a href="/controllers/dashboard/list/admin-submodulesCtrl.php" class="dropdown-item">Sous-modules</a></li>
                            <li><a href="/controllers/dashboard/list/admin-videosCtrl.php" class="dropdown-item">Vidéos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mt-5">
                        <a class="nav-link dropdown-toggle" role="button" aria-current="page" href="" data-bs-toggle="dropdown">
                            <i class="bi bi-file-font-fill"></i>
                            <span>Articles</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/controllers/dashboard/list/admin-articlesCtrl.php" class="dropdown-item">Articles</a></li>
                            <li><a href="/controllers/dashboard/list/admin-categoriesCtrl.php" class="dropdown-item">Catégories</a></li>
                            <li><a href="/controllers/dashboard/list/admin-subcategoriesCtrl.php" class="dropdown-item">Sous-catégories</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mt-5">
                        <a class="nav-link" aria-current="page" href="/controllers/dashboard/list/admin-commentsCtrl.php">
                            <i class="bi bi-chat-right-dots-fill"></i>
                            <span>Commentaires</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>