<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>

<?php } else { ?>
    <main>
        <section id="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 ">
                        <div class="banner-text">
                            <h1 class="">Formations<br>Dessin</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- START PRESENTATION OF SITE -->

        <section class="my-4 text-center" id="presentation">
            <div class="container">
                <div class="row">
                    <div class="col-12 my-5">
                        <p>Le dessin, ça s'apprend, ça s'explore !</p>
                        <p>Si tu es ici, c'est que t'es motivé(e) à entrer dans cet univers incroyable qu'est son apprentissage.</p>
                        <p>N'hésites plus</p>
                        <p>et</p>
                        <h2 class="mt-5">Deviens Explorateur de l'art</h2>
                        <button class="mt-5">
                            <a href="/controllers/sign/signUpCtrl.php" class="btnInscription" title="S'inscrire aux formations">S'inscrire</a>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 border-bottom my-5"></div>
                </div>
            </div>
        </section>

        <!-- END PRESENTATION OF SITE -->

        <!-- START TRAINING -->

        <section class="my-4 text-center" id="training">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5">
                        <h2>
                            Les formations
                        </h2>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <p>Suite à mon étude personnelle dans le domaine des arts, j'ai réalisé qu'il manquait des ingrédients importants pour atteindre le sommet de ma créativité.</p>
                            <p>Je l'ai appelé le "CUATRO GAGNANT"</p>
                            <p>Cette méthodologie est axée sur 4 points principaux :</p>
                            <ul>
                                <li>
                                    Observer
                                </li>
                                <li>
                                    Comprendre
                                </li>
                                <li>
                                    Mise en oeuvre par d'autres artistes
                                </li>
                                <li>
                                    Pratiquer avec des exercices adaptés
                                </li>
                            </ul>
                            <?php
                            if (isset($_SESSION['user'])) { ?>
                                <button class="mt-4 mb-5">
                                    <a href="/controllers/formation/formationCtrl.php" class="btnInscription" title="Accéder aux formations">Accéder aux formations</a>
                                </button>
                            <?php } else { ?>
                                <button class="mt-4 mb-5">
                                    <a href="/controllers/sign/signUpCtrl.php" class="btnInscription" title="S'incrire aux formations">En savoir +</a>
                                </button>
                            <?php } ?>
                        </div>
                        <div class="col-lg-6 col-12 mb-5">
                            <img src="/public/assets/img/chat.jpg" alt="Dessin de chat" class="image-platre">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 border-bottom my-5"></div>
                </div>
            </div>
        </section>

        <!-- END TRAINING -->

        <!-- START CONTACT -->

        <section class="my-4 text-center" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>
                            L'Alchimiste Créations
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-12 mt-5 d-flex flex-column align-items-center">
                        <img src="/public/assets/img/autoportrait.jpg" alt="Autoportrait noir et blanc" class="profilPicture rounded-circle">
                    </div>
                    <div class="offset-lg-1 col-lg-8 col-12 text-lg-end my-5 d-flex flex-column align-items-center">
                        <p>L'Alchimiste est mon nom d'artiste. Je l'ai choisi car j'aime beaucoup le développement personnel. L'Alchimiste provient du premier livre que j'ai lu, "l'Alchimiste" de Paolo Coelho. C'était en 2011.</p>
                        <p>Depuis mon plus jeune âge, j'ai toujours été passionnée de dessin. Au collège, je voulais entrer en école d'art mais mon destin en a décidé autrement. Je suis partie faire des études de comptabilité. Et oui, mes parents ont choisi pour moi, un "vrai" métier.</p>
                        <p>A l'époque du lycée, je dessinais partout, sur les tables, sur les trottoirs, sur les murs...</p>
                        <p>Puis la vie d'adulte a fait son irruption et j'ai commencé à sommeiller. Jusqu'en octobre 2020 où je me suis enfin réveillée. A deux doigts du burn out, j'ai quitté mon travail pour ENFIN faire ce qui me plait le plus au monde : CREER</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 border-bottom my-5"></div>
                </div>
            </div>
        </section>

        <!-- END CONTACT -->

        <!-- START MAGAZINE -->

        <section class="my-4 text-center" id="magazine">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3 mt-3">
                        <h2>
                            Le magazine
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <?php

                    foreach ($last_three_articles as $article) {
                    ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5 d-flex flex-column align-items-center">
                            <div class="card mt-5" style="width: 22rem; height: 100%;">
                                <img src="/public/uploads/articles/thumbnails/thumbnail_<?= $article->id_articles ?>.jpg" class="card-img-top" alt="La Flagellation du Christ de Piero della Franscesca">
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

                <div class="col-12 border-bottom my-5">
                </div>
            </div>
        </section>
        <!-- <section id="cookies">
        <div class="cookies">
            <div class="cookies-texte">
                <p>
                    En poursuivant, vous acceptez l'utilisation des cookies par le site afin de vous proposer des contenus adaptés et réaliser des statistiques.
                </p>
            </div>
            <div class="cookies-btn">
                <button type="button" class="btn btn-success mx-3">
                    Accepter
                </button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Paramètres
                </button>
            </div>
        </div>
    </section> -->

        <!-- END MAGAZINE -->

        <!-- MODAL -->
        <!-- <section id="modalCookies">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Personnaliser mes choix</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>L'utilisation des données est décrite dans notre <a href="">politique de protection des données personnelles</a></p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Cookies de statistiques
                        </label>
                        <p>Les cookies de statistiques aident à comprendre comment les visiteurs interagissent avec le site web afin de pouvoir améliorer la performance.</p>
                    </div>
                    <p>En cliquant sur le bouton Accepter, vous acceptez les <a href="">CGU</a> ainsi que la <a href="">politique de protection des données personnelles</a> Formations Dessin</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Refuser</button>
                    <button type="button" class="accept btn btn-primary">Accepter</button>
                </div>
            </div>
        </div>
    </div>
    </section> -->

    </main>
<?php } ?>