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
            <a href="/controllers/forum/privates/forumSubjectsCtrl.php" titre="Ajouter un sujet">
                <div class="forums px-5 py-3">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mb-5 text-center text-xl-start">Un autre moyen de tracer des droites ?</h4>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-2 col-12 text-center mb-3 mb-lg-0">
                                <img src="/public/assets/img/autoportrait.jpg" alt="Photo de profil" class="profilPicture" width="150">
                            </div>
                            <div class="col-12 col-xl-3 text-center text-xl-start">
                                <p>Dernier message par L'alchimiste</p>
                                <p>16 mars 2023</p>
                            </div>
                            <div class="col-12 col-xl-4 d-none d-xl-block text-center">
                                <p>1254 messages </p>
                            </div>
                            <div class="col-12 col-xl-3 d-none d-xl-block text-center text-xl-end">
                                <p>Crée par L'alchimiste</p>
                                <p>Il y a environ 1 an</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="forums px-5 py-3 my-4">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mb-5 text-center text-xl-start">Mes exercices</h4>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-2 col-12 text-center mb-3 mb-lg-0">
                                <img src="/public/assets/img/autoportrait.jpg" alt="Photo de profil" class="profilPicture" width="150">
                            </div>
                            <div class="col-xl-3 text-center text-xl-start">
                                <p>Dernier message par L'alchimiste</p>
                                <p>16 mars 2023</p>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block text-center">
                                <p>1254 messages </p>
                            </div>
                            <div class="col-xl-3 d-none d-xl-block text-center text-xl-end">
                                <p>Crée par L'alchimiste</p>
                                <p>Il y a environ 1 an</p>
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
                            <li class=" page-item disabled">
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