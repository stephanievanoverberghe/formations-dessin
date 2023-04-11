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

        <section class="mb-5" id="search-categories">
            <div class="container">
                <h2 class="text-center my-5">Toute l'actualité, les pas à pas,<br>les conseils ou les cours, c'est dans le magazine</h2>
                <div class="category pb-5 px-4">
                    <div class="row">
                        <div class="offset-lg-3 col-lg-6 my-5">
                            <form class="d-flex mt-3 mb-5" role="search" method="GET" action="magazineCtrl.php">
                                <input class="research form-control me-2" type="search" name="search" value="<?= $search ?? '' ?>" placeholder="Rechercher sur le magazine" aria-label="Search">
                                <button class="button" type="submit"><i class="bi bi-search icon"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <h3 class="mb-4">Catégories</h3>
                            <!-- SUBCATEGORIE -->
                            <select name="id_categories" id="id_categories" class="form-select">
                                <?php
                                foreach ($categories as $category) {
                                    $state = ($category->id_categories) ? "selected" : "";
                                    echo '<option value="' . $category->id_categories . '" ' .  $state  . '>' . $category->title . ' ' . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="offset-lg-1 col-lg-7">
                            <h3 class="mb-4">Sous catégories</h3>
                            <!-- SUBCATEGORIE -->
                            <select name="id_sub_categories" id="id_sub_categories" class="form-select">
                                <?php
                                foreach ($subcategories as $subcategory) {
                                    $state = ($subcategory->id_sub_categories == $categories->id_sub_modules) ? "selected" : "";
                                    echo '<option value="' . $subcategory->id_sub_categories . '" ' .  $state  . '>' . $subcategory->title . ' ' . '</option>';
                                }
                                ?>
                            </select>
                            <div class="error"><?= $errors['id_modules'] ?? '' ?></div>
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

                    foreach ($articles as $article) {
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

        <section id="pagination">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column align-items-center my-5">
                        <nav aria-label="...">
                            <ul class="pagination pagination-lg">

                                <li class="page-item <?= ($page == 1) ? "disabled" : "" ?>">
                                    <a class="page-link" href="/controllers/magazine/magazineCtrl.php?page=<?= $page - 1 ?>" aria-label="Preview">
                                        Précédent
                                    </a>
                                </li>
                                <!-- EFFECTUER UNE BOUCLE -->
                                <?php

                                for ($i = max($page - 1, 1); $i <= min($page + 1, $pageNb); $i++) { ?>

                                    <li class="page-item <?= ($page == $i) ? "active" : "" ?>" aria-current="page">
                                        <a class="page-link" href="/controllers/magazine/magazineCtrl.php?page=<?= $i ?>"><?= $i ?></a>
                                    </li>
                                <?php } ?>

                                <!-- AFFICHE ICONE PAGE SUIVANTE SAUF DERNIERE PAGE -->
                                <?php if ($page < $pageNb) { ?>
                                    <li class="page-item <?= ($page == $pageNb) ? "disabled" : "" ?>">
                                        <a class="page-link" href="/controllers/magazine/magazineCtrl.php?page=<?= $page + 1 ?>" aria-label="Next">
                                            Suivant
                                        </a>
                                    <?php } ?>
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