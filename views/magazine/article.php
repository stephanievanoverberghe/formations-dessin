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

            <section id="breadcrumb" class="">
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
                    <div class="row text-center flex-column flex-sm-row">
                        <div class="col-xl-2 col-12 mb-3 my-5 my-md-0">
                            <img src="/public/assets/img/autoportrait.jpg" alt="Photo de profil" class="profilPicture" width="150">
                        </div>
                        <div class="col-xl-10 col-12">
                            <div class="row text-xl-start">
                                <div class="col-12">
                                    <h3>Auteur de l'article : L'Alchimiste</h3>
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
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($articleUrl) ?>" target="_blank"><img src="/public/assets/img/facebook.png" alt="Logo Facebook" width="50"></a>
                        </div>
                        <div class="col-6 text-start mt-4">
                            <a href="https://pinterest.com/pin/create/button/?url=<?= urlencode($articleUrl) ?>" target="_blank"><img src="/public/assets/img/pinterest.png" alt="Logo Pinterest" width="50"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END NETWORK -->

        <!-- START ADD-TRAINING -->
        <?php
        if (!isset($_SESSION['user'])) { ?>
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
                                <a href="/controllers/sign/signUpCtrl.php" class="btn mt-4" title="S'incrire à la formation Les fondamentaux du dessin">S'inscrire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php }
        ?>
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
                                        <a href="/controllers/magazine/articleCtrl.php?id_articles=<?= $article->id_articles ?>" class="card-btn" title="Accéder à l'article <?= $article->title ?>">Lire l'article</a>
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
                <h2 class="text-center mt-5 mb-4">Commentaires</h2>
                <?php foreach ($comments as $comment) { ?>
                <div class="forums p-md-5 mb-4 p-3 pb-5">
                    <div class="row justify-content-center align-items-center">
                        
                        <div class="col-lg-3 col-md-12">
                            <div class="row text-center flex-column flex-sm-row">
                                <div class="col-12 mb-3 my-5 my-md-0">
                                    <img src="/public/assets/img/autoportrait.jpg" alt="Photo de profil" class="profilPicture" width="150">
                                </div>
                                <div class="col-12 mt-4">
                                    <p>L'alchimiste</p>
                                </div>
                                <div class="col-12">
                                    <p>Formateur</p>
                                </div>
                                <div class="col-12">
                                    <p><?= date('d.m.Y H:i', strtotime($comment['created_at'])) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="row">
                                <div class="col-12 text-center text-lg-start">
                                    <h3 class="mb-5"><?= $comment['title'] ?></h3>
                                </div>
                                <div class="col-12">
                                    <p><?= $comment['content'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    if (isset($_SESSION['user'])) { ?>
                        <div class="row mt-lg-3">
                            <div class="col-12 offset-lg-3 col-lg-3 text-center text-lg-end mb-3 mb-lg-0">
                                <a href="" class="">Répondre</a>
                            </div>
                            <div class="col-12 col-lg-3 text-center text-lg-end">
                                <a href="">Signaler ce message</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php } ?>
                
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
                            <h3 class="text-lg-start text-center mt-5 mb-4">Ajouter un commentaire</h3>
                        </div>
                    </div>
                    <div class="forums p-md-5 mb-4 px-1 pb-5">
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
                                <input type="submit" value="Commenter">
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