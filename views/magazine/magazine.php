<main>

    <!-- START BANNER -->

    <section class="my-4 text-center" id="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <div class="banner-text">
                        <h1>La magazine</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END BANNER -->

    <!-- START BREADCRUMB -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/controllers/homeCtrl.php"">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Magazine</li>
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
                        <a href=""><?= htmlentities($category->title) ?></a><br>
                        <?php } ?>
                    </div>
                    <div class="offset-lg-1 col-lg-7">
                        <h3 class="mb-4">Sous catégories</h3>
                        <?php
                            foreach ($subcategories as $subcategory) {
                        ?>
                        <div class="row">
                            <div class="col-4">
                                <a href=""><?= htmlentities($subcategory->title) ?></a><br>
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
                <?php foreach($articles as $article): ?>
                <div class="col-lg-4 col-12 col-md-6 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5">
                        <img src="/public/assets/img/peinture_la-flagellation-du-christ.png" class="card-img-top" alt="La Flagellation du Christ de Piero della Franscesca">
                        <small class="text-center"><?= htmlentities($article->created_at->format('d F Y')) ?></small>
                        <div class="card-body text-center d-flex flex-column justify-content-around">
                            <h3 class="card-title text-center"><?= htmlentities($article->title) ?></h3>
                            <p class="card-text"><?= nl2br(htmlentities(Text::excerpt($article->content))) ?></p>
                            <p>
                                <a href="#" class="card-btn">Lire l'article</a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                <div class="col-lg-4 col-12 col-md-6 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5">
                        <img src="/public/assets/img/pas-a-pas_fleurs.jpg" class="card-img-top" alt="Amandier en fleurs de Vincent Van Gogh">
                        <small class="text-center">Publié le</small>
                        <div class="card-body text-center d-flex flex-column justify-content-around">
                            <h3 class="card-title text-center">Pas à pas - Dessiner des fleurs</h3>
                            <p class="card-text">Quelque soit leur forme, les fleurs peuvent être un sujet complexe. Cependant, il est idéal pour les personnes débutantes en dessin.</p>
                            <p>
                                <a href="#" class="card-btn">Lire l'article</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 col-md-6 d-flex flex-column align-items-center">
                    <div class="card mt-5">
                        <img src="/public/assets/img/grotte-chauvet.jpg" class="card-img-top" alt="Peinture pariétal de la grotte Chauvet">
                        <small class="text-center">Publié le</small>
                        <div class="card-body text-center d-flex flex-column justify-content-around">
                            <h3 class="card-title text-center">La naissance de l'art</h3>
                            <p class="card-text">Autour de - 40 000 ans, à l'aube du Poléolithique supérieur, l'Eurasie occidentale connaît un bouleversement culturel majeur. C'est la naissance de l'art.</p>
                            <p>
                                <a href="#" class="card-btn">Lire l'article</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12 col-md-6 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5">
                        <img src="/public/assets/img/peinture_la-flagellation-du-christ.png" class="card-img-top" alt="La Flagellation du Christ de Piero della Franscesca">
                        <small class="text-center">Publié le</small>
                        <div class="card-body text-center d-flex flex-column justify-content-around">
                            <h3 class="card-title text-center">Les 8 règles de la composition</h3>
                            <p class="card-text">Une composition puissante exerce une attraction intuitive sur l'observateur. Il existe de nombreuses règles.</p>
                            <p>
                                <a href="#" class="card-btn">Lire l'article</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 col-md-6 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5">
                        <img src="/public/assets/img/pas-a-pas_fleurs.jpg" class="card-img-top" alt="Amandier en fleurs de Vincent Van Gogh">
                        <small class="text-center">Publié le</small>
                        <div class="card-body text-center d-flex flex-column justify-content-around">
                            <h3 class="card-title text-center">Pas à pas - Dessiner des fleurs</h3>
                            <p class="card-text">Quelque soit leur forme, les fleurs peuvent être un sujet complexe. Cependant, il est idéal pour les personnes débutantes en dessin.</p>
                            <p>
                                <a href="#" class="card-btn">Lire l'article</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 col-md-6 d-flex flex-column align-items-center">
                    <div class="card mt-5">
                        <img src="/public/assets/img/grotte-chauvet.jpg" class="card-img-top" alt="Peinture pariétal de la grotte Chauvet">
                        <small class="text-center">Publié le</small>
                        <div class="card-body text-center d-flex flex-column justify-content-around">
                            <h3 class="card-title text-center">La naissance de l'art</h3>
                            <p class="card-text">Autour de - 40 000 ans, à l'aube du Poléolithique supérieur, l'Eurasie occidentale connaît un bouleversement culturel majeur. C'est la naissance de l'art.</p>
                            <p>
                                <a href="#" class="card-btn">Lire l'article</a>
                            </p>
                        </div>
                    </div>
                </div>
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
                        <ul class="pagination">
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