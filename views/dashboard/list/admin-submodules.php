<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>

<?php } else { ?>
    <main>
        <section id="submodules-list">
            <div class="container-fluid">
                <section id="searchSubmodules">
                    <div class="row justify-content-center">
                        <div class="col-6">

                            <!-- RESEARCH -->

                            <form action="admin-submodulesCtrl.php" class="d-flex mt-3 mb-5" method="GET" role="search">
                                <input 
                                    class="research form-control me-2" 
                                    type="search" 
                                    name="search" 
                                    value="<?= $search ?? '' ?>" 
                                    placeholder="Rechercher" 
                                    aria-label="Search">
                                <button class="btn" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                </section>
                <div class="row justify-content-center">
                    <div class="col-lg-11 mt-5">
                        <h1 class="mb-5 text-center">Liste des sous-modules</h1>
                        <div class="formSubmodule text-end">
                            <a href="/controllers/dashboard/add/submodulesCtrl.php"><i class="bi bi-plus-square-fill"></i></a>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Module</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($submodules as $submodule) {
                                ?>
                                    <tr>
                                        <td><?= $submodule->title ?></td>
                                        <td><?= $submodule->id_modules ?></td>
                                        <td>
                                            <a href="/controllers/dashboard/edit/submodulesCtrl.php?id_sub_modules=<?= $submodule->id_sub_modules ?>"><i class="bi bi-eye-fill"></i></a>
                                            <a href="/controllers/dashboard/update/submodulesCtrl.php?id_sub_modules=<?= $submodule->id_sub_modules ?>" class="mx-3"><i class="bi bi-pencil-fill"></i></a>
                                            <a class="delete" data-bs-toggle="modal" data-bs-target="#deleteSubmodule" data-idSubmodules="<?= $submodule->id_sub_modules ?>">
                                                <i class="bi bi-trash3-fill" data-idSubmodules="<?= $submodule->id_sub_modules ?>"></i>
                                            </a>
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
                                    <a class="page-link" href="/controllers/dashboard/list/admin-submodulesCtrl.php?page=<?= $page - 1 ?>" aria-label="Preview">
                                        Précédent
                                    </a>
                                </li>
                                <!-- EFFECTUER UNE BOUCLE -->
                                <?php

                                for ($i = max($page - 1, 1); $i <= min($page + 1, $pageNb); $i++) { ?>

                                <li class="page-item <?= ($page == $i) ? "active" : "" ?>" aria-current="page">
                                    <a class="page-link" href="/controllers/dashboard/list/admin-submodulesCtrl.php?page=<?= $i ?>"><?= $i ?></a>
                                </li>
                                <?php } ?>

                                <!-- AFFICHE ICONE PAGE SUIVANTE SAUF DERNIERE PAGE -->
                                <?php if ($page < $pageNb) { ?>
                                <li class="page-item <?= ($page == $pageNb) ? "disabled" : "" ?>">
                                    <a class="page-link" href="/controllers/dashboard/list/admin-submodulesCtrl.php?page=<?= $page + 1 ?>" aria-label="Next">
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

        <!-- MODAL -->

        <div class="modal fade" id="deleteSubmodule" tabindex="-1" aria-labelledby="deleteSubmoduleLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteSubmoduleLabel">Supprimer le sous-module</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Êtes-vous sûr de bien vouloir supprimer le sous_module ? Cette action est irrévocable.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <a type="button" class="btn btn-danger" id="deleteLinkSubmodule">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>

    </main>
<?php } ?>