<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>

<?php }
if ($article) { ?>
    <main>

        <!-- START BANNER -->
        <section class="mb-4 text-center" id="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col text-center">
                        <div class="banner-text">
                            <h1><?= $article->title ?></h1>
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
                                <li class="breadcrumb-item"><a href="/controllers/homeCtrl.php">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="/controllers/magazine/magazineCtrl.php">Magazine</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $article->title ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB -->

        <!-- START ARTICLE -->
        <section>
            <div class="container">
                <div class="article my-5 px-4 py-5">
                    <div class="row">
                        <div class="col-12">
                            <p>
                                <?= $article->hook ?>
                            </p>
                        </div>
                        <div class="col-12">
                            <?php
                            $subtitleArray = unserialize($article->subtitle);
                            $contentArray = unserialize($article->content);
                            foreach ($subtitleArray as $key => $subtitleData) {
                                $contentData = $contentArray[$key];
                            ?>
                                <h2 class="text-center my-5"><?= $subtitleData ?></h2>
                                <div class="d-flex justify-content-center mb-5">
                                    <img src="/public/assets/img/rythme.jpg" alt="carré dans des carrés" class="img-fluid">
                                </div>

                                <p>
                                    <?= $contentData ?>
                                </p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center my-5">Conclusion</h2>
                            <p>
                                <?= $article->conclusion ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END ARTICLE -->

        <!-- START AUTHOR -->
        <section id="author" class="text-center">
            <div class="container">
                <div class="author my-5 px-4 py-5">
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="/public/assets/img/autoportrait.jpg" alt="Photo de profil" class="profilPicture" width="150">
                        </div>
                        <div class="col-lg-10">
                            <div class="row text-start">
                                <div class="col-12">
                                    <h5>Auteur de l'article : L'Alchimiste</h5>
                                </div>
                                <div class="col-12">
                                    <p>Depuis sa plus tendre enfance, l'Alchimiste est passionnée de dessin et de peinture.
                                        Son objectif est de partager cette passion avec un maximum de personne.
                                        C'est pour cela qu'elle a créé le site web Formations Dessins.
                                        Alors régales-toi autant que moi et partage un maximum ta passion également.
                                        A bientôt pour un nouvel article.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END AUTHOR -->

        <!-- START NETWORK -->
        <section id="network" class="text-center">
            <div class="container">
                <div class="network my-5 px-4 py-5">
                    <div class="row">
                        <div class="col-12">
                            <h3>Cet article t'a plu ? Partages-le</h3>
                        </div>
                        <div class="col-6 text-end mt-4">
                            <a href="#" target="_blank"><img src="/public/assets/img/facebook.png" alt="Logo Facebook" width="50"></a>
                        </div>
                        <div class="col-6 text-start mt-4">
                            <a href="#" target="_blank"><img src="/public/assets/img/pinterest.png" alt="Logo Pinterest" width="50"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END NETWORK -->

        <!-- START ADD-TRAINING -->
        <section id="addTraining" class="text-center">
            <div class="container">
                <div class="addTraining my-5 px-4 py-5">
                    <div class="row">
                        <div class="col-12">
                            <h3>Formation - Les fondamentaux du dessin</h3>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4">
                            <img src="/public/assets/img/formation1.png" alt="Image de la formation">
                        </div>
                        <div class="col-8 mt-5 px-5 ">
                            <p>Le dessin, ça s'apprend, ça s'explore !</p>
                            <p>Si tu es ici, c'est que tu es motivé(e) à entrer dans cet univers incroyable qu'est son apprentissage.</p>
                            <p class="mb-5">Alors n'hésites plus et</p>
                            <h4>Deviens Explorateur de l'art</h4>
                            <a href="/controllers/sign/signUpCtrl.php" class="btn mt-4">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END ADD-TRAINING -->

        <!-- START MORE ARTCILE -->
        <section id="moreArticle" class="text-center">
            <div class="container">
                <div class="moreArticle">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="mt-5">Articles pour aller plus loin</h3>
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
                                        <a href="/controllers/magazine/articleCtrl.php?id_articles=<?= $article->id_articles ?>" class="card-btn">Lire l'article</a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- END MORE ARTICLE -->

        <!-- START COMMENTS ARTICLE -->
        <section id="commentsArticle">
            <div class="container">
                <h2 class="text-center mt-5 mb-4">Commentaire</h2>
                <div class="forums p-5">

                    <div class="row justify-content-center align-items-center">
                        <div class="col-3">
                            <div class="row text-center">
                                <div class="col-12">
                                    <img src="/public/assets/img/autoportrait.jpg" alt="Photo de profil" class="profilPicture" width="150">
                                </div>
                                <div class="col-12">
                                    <p>L'alchimiste</p>
                                </div>
                                <div class="col-12">
                                    <p>Formateur</p>
                                </div>
                                <div class="col-12">
                                    <p>Le 16 mars 2023 à 15:15:14</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mb-5">Bonjour @Thom Vi</h3>
                                </div>
                                <div class="col-12">
                                    <p>Le premier conseil que je vais te donner est de ne surtout pas utiliser de règle pour tracer tes droites. Elles sembleraient bien trop rigides et sans vies. La meilleure façon est de t'entraîner un peu chaque jour.</p>
                                </div>
                                <div class="col-12">
                                    <p class="mb-5">En ce qui concerne tes exercices, tes droites me semblent plutôt bien. Tu n'as pas de raison de douter de toi, continues à t'exercer et tout ira bien. Tu peux passer au chapitre suivant sur les courbes. A bientôt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 text-end">
                            <a href="" class="me-4">Répondre</a>
                            <a href="" class="me-4">Citer</a>
                            <a href="">Signaler ce message</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END COMMENTS ARTICLE -->

        <!-- START ADD COMMENTS -->
        <?php
        if (isset($_SESSION['user'])) { ?>
        <section id="topics-comments">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-start mt-5 mb-4">Ajouter un commentaire</h3>
                    </div>
                </div>
                <div class="forums p-5 mb-4">
                    <form method="POST">
                        <div class="col-12 mb-3">
                            <label for="title" class="form_label orange mb-2">Titre
                                <span class="orange"> *</span>
                            </label>
                            <input type="text" value="" class="form-control form-control-lg <?= isset($errors['title']) ? 'is-invalid' : '' ?>" id="title" name="title" required>
                            <div class="error"><?= $errors['title'] ?? '' ?></div>
                        </div>
                        <div class="col-12">
                            <label for="contentArticle" class="form_label orange mt-4 mb-2">Commentaire
                                <span class="orange"> *</span>
                            </label>
                            <textarea class="form-control" id="contentArticle" rows="10" placeholder="Écrire mon commentaire ici" name="contentArticle"></textarea>
                        </div>
                        <div class="col-12 mt-4 text-center">
                            <input type="submit" value="commenter">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <?php } ?>

        <!-- END ADD COMMENTS -->

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