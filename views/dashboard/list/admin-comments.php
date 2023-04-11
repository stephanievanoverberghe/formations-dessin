<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>

<?php } else { ?>

    <main>

        <section id="pending-comment">
            <div class="container-fluid">
                <section id="searchComments">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <!-- RESEARCH -->
                            <form action="admin-commentsCtrl.php" class="d-flex mt-3 mb-5" method="GET" role="search">
                                <input class="research form-control me-2" type="search" name="search" value="<?= $search ?? '' ?>" placeholder="Rechercher" aria-label="Search">
                                <button class="btn" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                </section>

                <div class="row justify-content-center">
                    <div class="col-lg-11 mt-5">
                        <h1 class="mb-5 text-center">Commentaires</h1>
                        <h2 class="text-center">En attente</h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Auteur(e)</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Crée le</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($unvalidateComments as $unvalidateComment) {
                                ?>
                                    <tr>
                                        <td><?= $unvalidateComment->id_users ?> </td>
                                        <td><?= $unvalidateComment->title ?></td>
                                        <td><?= date('d.m.Y', strtotime($unvalidateComment->created_at)) ?></td>
                                        <td>
                                            <a href="/controllers/dashboard/edit/commentsCtrl.php?id_comments=<?= $unvalidateComment->id_comments ?>" class="mx-3">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <section id="comments-list">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-11 mt-5">
                            <h2 class="mb-5 text-center">Validés</h2>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Auteur(e)</th>
                                        <th scope="col">Titre</th>
                                        <th scope="col">Validé le</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($validateComments as $validateComment) {
                                        if ($validateComment->validated_at !== null) { ?>

                                            <tr>
                                                <td><?= $validateComment->id_users ?></td>
                                                <td><?= $validateComment->title ?></td>
                                                <td><?= date('d.m.Y', strtotime($validateComment->validated_at)) ?></td>
                                                <td>
                                                    <a href="/controllers/dashboard/edit/commentsCtrl.php?id_comments=<?= $validateComment->id_comments ?>" class=" mx-3"><i class="bi bi-eye-fill"></i></a>

                                                </td>
                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- START PAGINATION -->

            <section id="pagination">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 d-flex flex-column align-items-center my-5">
                            <nav aria-label="...">
                                <ul class="pagination pagination-lg">

                                    <li class="page-item <?= ($page == 1) ? "disabled" : "" ?>">
                                        <a class="page-link" href="/controllers/dashboard/list/admin-commentsCtrl.php?page=<?= $page - 1 ?>" aria-label="Preview">
                                            Précédent
                                        </a>
                                    </li>
                                    <!-- EFFECTUER UNE BOUCLE -->
                                    <?php

                                    for ($i = max($page - 1, 1); $i <= min($page + 1, $pageNb); $i++) { ?>

                                        <li class="page-item <?= ($page == $i) ? "active" : "" ?>" aria-current="page">
                                            <a class="page-link" href="/controllers/dashboard/list/admin-commentsCtrl.php?page=<?= $i ?>"><?= $i ?></a>
                                        </li>
                                    <?php } ?>

                                    <!-- AFFICHE ICONE PAGE SUIVANTE SAUF DERNIERE PAGE -->
                                    <?php if ($page < $pageNb) { ?>
                                        <li class="page-item <?= ($page == $pageNb) ? "disabled" : "" ?>">
                                            <a class="page-link" href="/controllers/dashboard/list/admin-commentsCtrl.php?page=<?= $page + 1 ?>" aria-label="Next">
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
    </main>
<?php } ?>