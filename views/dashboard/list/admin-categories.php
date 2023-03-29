<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>

<?php } else { ?>
    <main>
        <section id="categories-list">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-11 mt-5">
                        <h1 class="mb-5 text-center">Liste des catégories</h1>
                        <div class="formCategory text-end">
                            <a href="/controllers/dashboard/add/categoriesCtrl.php"><i class="bi bi-plus-square-fill"></i></a>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($categories as $category) {
                                ?>
                                    <tr>
                                        <td><?= $category->title ?></td>
                                        <td>
                                            <a href="/controllers/dashboard/edit/categoriesCtrl.php?id_categories=<?= $category->id_categories ?>"><i class="bi bi-eye-fill"></i></a>
                                            <a href="/controllers/dashboard/update/categoriesCtrl.php?id_categories=<?= $category->id_categories ?>" class="mx-3"><i class="bi bi-pencil-fill"></i></a>
                                            <a class="deleteCategory" data-bs-toggle="modal" data-bs-target="#deleteCategory" data-idCategories="<?= $category->id_categories ?>">
                                                <i class="bi bi-trash3-fill" data-idCategories="<?= $category->id_categories ?>"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- MODAL -->

        <div class="modal fade" id="deleteCategory" tabindex="-1" aria-labelledby="deleteCategoryLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteCategoryLabel">Supprimer la catégorie</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Êtes-vous sûr de bien vouloir supprimer la catégorie ? Cette action est irrévocable.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <a type="button" class="btn btn-danger" id="deleteLinkCategory">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php } ?>