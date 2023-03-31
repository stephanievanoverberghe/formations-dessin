<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>

<?php } else { ?>
    <main>
        <section id="users-list">
            <div class="container-fluid">
                <section id="searchUsers">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <!-- RESEARCH -->
                            <form action="admin-usersCtrl.php" class="d-flex mt-3 mb-5" method="GET" role="search">
                                <input class="research form-control me-2" type="search" name="search" value="<?= $search ?? '' ?>" placeholder="Rechercher" aria-label="Search">
                                <button class="btn" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                </section>
                <div class="row justify-content-center">
                    <div class=" col-lg-11 mt-5">
                        <h1 class="mb-5 text-center">Liste des utilisateurs</h1>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($users as $user) {
                                ?>
                                    <tr>
                                        <td><?= $user->lastname ?></td>
                                        <td><?= $user->firstname ?></td>
                                        <td>
                                            <a href="/controllers/dashboard/edit/usersCtrl.php?id_users=<?= htmlentities($user->id_users) ?>"><i class="bi bi-eye-fill"></i></a>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
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
                                    <a class="page-link" href="/controllers/dashboard/list/admin-usersCtrl.php?page=<?= $page - 1 ?>" aria-label="Preview">
                                        Précédent
                                    </a>
                                </li>
                                <!-- EFFECTUER UNE BOUCLE -->
                                <?php

                                for ($i = max($page - 1, 1); $i <= min($page + 1, $pageNb); $i++) { ?>

                                <li class="page-item <?= ($page == $i) ? "active" : "" ?>" aria-current="page">
                                    <a class="page-link" href="/controllers/dashboard/list/admin-usersCtrl.php?page=<?= $i ?>"><?= $i ?></a>
                                </li>
                                <?php } ?>

                                <!-- AFFICHE ICONE PAGE SUIVANTE SAUF DERNIERE PAGE -->
                                <?php if ($page < $pageNb) { ?>
                                <li class="page-item <?= ($page == $pageNb) ? "disabled" : "" ?>">
                                    <a class="page-link" href="/controllers/dashboard/list/admin-usersCtrl.php?page=<?= $page + 1 ?>" aria-label="Next">
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