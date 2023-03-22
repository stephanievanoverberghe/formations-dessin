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
    </main>
<?php } ?>