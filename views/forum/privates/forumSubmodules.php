<main>
    <!-- START BANNER -->

    <section class="mb-4 text-center" id="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <div class="banner-text">
                        <h1>Forum<br>La droite</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END BANNER -->

    <!-- START BREADCRUMB -->

    <section id="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="/controllers/forum/publics/forumCtrl.php">Forums</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="/controllers/forum/privates/forumModulesCtrl.php">Module 2</a></li>
                            <li class="breadcrumb-item active" aria-current="page">La droite</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- END BREADCRUMB -->

    <!-- START SEARCH -->

    <section id="search" class="pt-5">
        <div class="container">
            <div class="forums px-4">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6 my-5">
                        <form class="d-flex" role="search">
                            <input class="form-control form-control-lg me-2" type="search" placeholder="Rechercher un sujet" aria-label="Search">
                            <button class="button" type="submit"><i class="bi bi-search icon"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END SEARCH -->

    <section id="general-topics">
        <div class="container">
            <div class="row">
            <div class="col-12">
                    <div class="addTopics text-end mt-5">
                        <a href="#"><i class="bi bi-plus-square-fill icon"></i></a>
                    </div>
                </div>
                <div class="col-12">
                    <h2 class="text-center mb-5">Sujets</h2>
                </div>
            </div>
            <a href="/controllers/forum/privates/forumSubjectsCtrl.php">
                <div class="forums px-5 py-3">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mb-5">Un autre moyen de tracer des droites ?</h4>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-2">
                                <img src="/public/assets/img/autoportrait.jpg" alt="Photo de profil" class="profilPicture" width="150">
                            </div>
                            <div class="col-3">
                                <p>Dernier message par L'alchimiste</p>
                                <p>16 mars 2023 à 10:03:06</p>
                            </div>
                            <div class="col-4 text-center">
                                <p>2 messages</p>
                            </div>
                            <div class="col-3 text-end">
                                <p>Crée par Thom</p>
                                <p>Il y a 2 jour</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="forums px-5 py-3 my-4">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mb-5">Mes exercices</h4>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-2">
                                <img src="/public/assets/img/autoportrait.jpg" alt="Photo de profil" class="profilPicture" width="150">
                            </div>
                            <div class="col-3">
                                <p>Dernier message par Marie Hello</p>
                                <p>16 mars 2023 à 12:12:54</p>
                            </div>
                            <div class="col-4 text-center">
                                <p>6 messages</p>
                            </div>
                            <div class="col-3 text-end">
                                <p>Crée par Marie Hello</p>
                                <p>Il y a 4 jours</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>

        <!-- START PAGINATION -->

        <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column align-items-center mt-4">
                    <nav aria-label="...">
                        <ul class="pagination pagination-lg"">
                            <li class="page-item disabled">
                                <a class="page-link">Précédent</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Suivant</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- END PAGINATION -->


    <section class="my-4 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 border-bottom my-3 mt-5">
                </div>
            </div>
        </div>
    </section>
</main>