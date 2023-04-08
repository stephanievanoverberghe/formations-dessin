<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>

<?php } else { ?>
    <main>

        <!-- START BANNER -->

        <section class="mb-4 text-center" id="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col text-center">
                        <div class="banner-text">
                            <h1>Le magazine</h1>
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
                                <li class="breadcrumb-item"><a href="/controllers/homeCtrl.php"">Accueil</a></li>
                            <li class=" breadcrumb-item active" aria-current="page">Magazine</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- END BREADCRUMB -->

        <!-- START CATEGORY -->

        <section class="mb-5">
            <div class="container">
                <h2 class="text-center my-5">Toute l'actualité, les pas à pas,<br>les conseils ou les cours, c'est dans le magazine</h2>
                <div class="category pb-5 px-4">
                    <div class="row">
                        <div class="offset-lg-3 col-lg-6 my-5">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Rechercher sur le magazine" aria-label="Search">
                                <button class="button" type="submit"><i class="bi bi-search icon"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <h3 class="mb-4">Catégories</h3>
                            <?php
                            foreach ($categories as $category) {
                            ?>
                                <a href=""><?= $category->title ?></a><br>
                            <?php } ?>
                        </div>
                        <div class="offset-lg-1 col-lg-7">
                            <h3 class="mb-4">Sous catégories</h3>
                            <?php
                            foreach ($subcategories as $subcategory) {
                            ?>
                                <div class="row">
                                    <div class="col-4">
                                        <a href=""><?= $subcategory->title ?></a><br>
                                    </div>
                                    <!-- <div class="col-4">
                                <a href="">Artistes célèbres</a><br>
                                <a href="">Mouvements dans l'art</a><br>
                                <a href="">Les crayons</a><br>
                                <a href="">Les papiers</a><br>
                                <a href="">Les gommes</a>
                            </div>
                            <div class="col-4">
                                <a href="">La perspective</a><br>
                                <a href="">La composition</a><br>
                                <a href="">L'ombre et la lumière</a><br>
                                <a href="">Les textures</a><br>
                            </div> -->
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- END CATEGORY -->

        <!-- START MAGAZINE -->

        <section class="my-4 text-center" id="magazine">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3 mt-5">
                        <h2>
                            Les articles
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <?php

                    foreach ($last_three_articles as $article) {
                    ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5 d-flex flex-column align-items-center">
                            <div class="card mt-5" style="width: 22rem; height: 100%;">
                                <img src="/public/assets/img/peinture_la-flagellation-du-chri.png" class="card-img-top" alt="La Flagellation du Christ de Piero della Franscesca">
                                <small>Publié le <?= date('d.m.Y', strtotime($article->created_at)) ?></small>
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h3 class="card-title"><?= $article->title ?></h3>
                                    <p class="card-text"><?= $article->excerpt ?></p>
                                    <p>
                                        <a href="/controllers/magazine/articleCtrl.php?id_articles=<?= $article->id_articles ?>" class="card-btn">Lire l'article</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </section>

        <!-- END MAGAZINE -->

        <!-- START PAGINATION -->

        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column align-items-center">
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
<?php } ?>