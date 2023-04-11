<main>

    <!-- START BANNER -->

    <section class="mb-4 text-center" id="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <div class="banner-text">
                        <h1>Les forums</h1>
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
                            <li class="breadcrumb-item active" aria-current="page">Forums</li>
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
                            <input class="form-control form-control-lg me-2" type="search" placeholder="Rechercher un forum" aria-label="Search">
                            <button class="button" type="submit"><i class="bi bi-search icon"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END SEARCH -->

    <!-- START MAGAZINE -->

    <section class="my-4 text-center" id="forums-publics">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3 mt-5">
                    <h2>
                        Forums publics
                    </h2>
                </div>
            </div>
            <div class="row">
            
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5" style="width: 22rem; height: 100%;">
                        <img src="/public/assets/img/peinture_la-flagellation-du-chri.png" class="card-img-top" alt="La Flagellation du Christ de Piero della Franscesca">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h3 class="card-title">Présentation des membres</h3>
                            <p class="card-text">Présentez-vous en quelques lignes</p>
                            <p>
                                <a href="#" class="card-btn">Accéder au forum</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5" style="width: 22rem; height: 100%;">
                        <img src="/public/assets/img/pas-a-pas_fleurs.jpg" class="card-img-top" alt="Amandier en fleurs de Vincent Van Gogh">
                        <div class="card-body">
                            <h3 class="card-title d-flex flex-column justify-content-between">Matériels de dessin</h3>
                            <p class="card-text">Vos questions à propos du matériel de dessin, c'est ici !</p>
                            <p>
                                <a href="#" class="card-btn">Accéder au forum</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5" style="width: 22rem; height: 100%;">
                        <img src="/public/assets/img/grotte-chauvet.jpg" class="card-img-top" alt="Peinture pariétal de la grotte Chauvet">
                        <div class="card-body">
                            <h3 class="card-title d-flex flex-column justify-content-between">Croquis et dessins</h3>
                            <p class="card-text">Postez vos créations et partagez votre progression avec les autres</p>
                            <p>
                                <a href="#" class="card-btn">Accéder au forum</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5" style="width: 22rem; height: 100%;">
                        <img src="/public/assets/img/peinture_la-flagellation-du-chri.png" class="card-img-top" alt="La Flagellation du Christ de Piero della Franscesca">
                        <div class="card-body">
                            <h3 class="card-title d-flex flex-column justify-content-between">Inspirations du moment</h3>
                            <p class="card-text">Artistes préférés ? ou simplement une chose inspirante, partagez ici !</p>
                            <p>
                                <a href="#" class="card-btn">Accéder au forum</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5" style="width: 22rem; height: 100%;">
                        <img src="/public/assets/img/pas-a-pas_fleurs.jpg" class="card-img-top" alt="Amandier en fleurs de Vincent Van Gogh">
                        <div class="card-body">
                            <h3 class="card-title d-flex flex-column justify-content-between">Problèmes techniques</h3>
                            <p class="card-text">Vous rencontrez un problème sur le site, demandez de l'aide</p>
                            <p>
                                <a href="#" class="card-btn">Accéder au forum</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if (isset($_SESSION['user'])) { ?>
    <section class="my-4 text-center" id="forums-privés">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3 mt-5">
                    <h2>
                        Forums privés
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5" style="width: 22rem; height: 100%;">
                        <img src="/public/assets/img/peinture_la-flagellation-du-chri.png" class="card-img-top" alt="La Flagellation du Christ de Piero della Franscesca">
                        <div class="card-body">
                            <h3 class="card-title d-flex flex-column justify-content-between">Introduction</h3>
                            <p class="card-text">Les bases du dessin</p>
                            <p>
                                <a href="#" class="card-btn">Accéder au forum</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5" style="width: 22rem; height: 100%;">
                        <img src="/public/assets/img/pas-a-pas_fleurs.jpg" class="card-img-top" alt="Amandier en fleurs de Vincent Van Gogh">
                        <div class="card-body">
                            <h3 class="card-title d-flex flex-column justify-content-between">Module 1</h3>
                            <p class="card-text">Le matériel</p>
                            <p>
                                <a href="#" class="card-btn">Accéder au forum</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5" style="width: 22rem; height: 100%;">
                        <img src="/public/assets/img/grotte-chauvet.jpg" class="card-img-top" alt="Peinture pariétal de la grotte Chauvet">
                        <div class="card-body">
                            <h3 class="card-title d-flex flex-column justify-content-between">Module 2</h3>
                            <p class="card-text">Observer en 2d</p>
                            <p>
                                <a href="/controllers/forum/privates/forumModulesCtrl.php" class="card-btn">Accéder au forum</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5" style="width: 22rem; height: 100%;">
                        <img src="/public/assets/img/peinture_la-flagellation-du-chri.png" class="card-img-top" alt="La Flagellation du Christ de Piero della Franscesca">
                        <div class="card-body">
                            <h3 class="card-title d-flex flex-column justify-content-between">Module 3</h3>
                            <p class="card-text">Observer en 3d</p>
                            <p>
                                <a href="#" class="card-btn">Accéder au forum</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5" style="width: 22rem; height: 100%;">
                        <img src="/public/assets/img/pas-a-pas_fleurs.jpg" class="card-img-top" alt="Amandier en fleurs de Vincent Van Gogh">
                        <div class="card-body">
                            <h3 class="card-title d-flex flex-column justify-content-between">Module 4</h3>
                            <p class="card-text">Ombres et lumières</p>
                            <p>
                                <a href="#" class="card-btn">Accéder au forum</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5" style="width: 22rem; height: 100%;">
                        <img src="/public/assets/img/grotte-chauvet.jpg" class="card-img-top" alt="Peinture pariétal de la grotte Chauvet">
                        <div class="card-body">
                            <h3 class="card-title d-flex flex-column justify-content-between">Module 5</h3>
                            <p class="card-text">Textures et matières</p>
                            <p>
                                <a href="#" class="card-btn">Accéder au forum</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5" style="width: 22rem; height: 100%;">
                        <img src="/public/assets/img/peinture_la-flagellation-du-chri.png" class="card-img-top" alt="La Flagellation du Christ de Piero della Franscesca">
                        <div class="card-body">
                            <h3 class="card-title d-flex flex-column justify-content-between">Module 6</h3>
                            <p class="card-text">Composition</p>
                            <p>
                                <a href="#" class="card-btn">Accéder au forum</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5" style="width: 22rem; height: 100%;">
                        <img src="/public/assets/img/pas-a-pas_fleurs.jpg" class="card-img-top" alt="Amandier en fleurs de Vincent Van Gogh">
                        <div class="card-body">
                            <h3 class="card-title d-flex flex-column justify-content-between">Conclusion</h3>
                            <p class="card-text">Exercice final</p>
                            <p>
                                <a href="#" class="card-btn">Accéder au forum</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <section class="my-4 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 border-bottom my-3 mt-5">
                </div>
            </div>
        </div>
    </section>



</main>