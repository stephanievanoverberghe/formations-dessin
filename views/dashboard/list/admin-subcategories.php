<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>

<?php } else { ?>
    <main>
        <section id="subcategories-list">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-11 mt-5">
                        <h1 class="mb-5 text-center">Liste des sous-catégories</h1>
                        <div class="formSubcategory text-end">
                            <a href="/controllers/dashboard/add/subCategoriesCtrl.php"><i class="bi bi-plus-square-fill"></i></a>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Categorie</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($subcategories as $subcategory) {
                                ?>
                                    <tr>
                                        <td><?= $subcategory->title ?></td>
                                        <td><?= $subcategory->id_categories ?></td>
                                        <td>
                                            <a href="/controllers/dashboard/edit/subcategoriesCtrl.php?id_sub_categories=<?= $subcategory->id_sub_categories ?>"><i class="bi bi-eye-fill"></i></a>
                                            <a href="/controllers/dashboard/update/subcategoriesCtrl.php?id_sub_categories=<?= $subcategory->id_sub_categories ?>" class="mx-3"><i class="bi bi-pencil-fill"></i></a>
                                            <a class="delete" data-bs-toggle="modal" data-bs-target="#deleteSubcategory" data-idSubcategories="<?= $subcategory->id_sub_categories ?>">
                                                <i class="bi bi-trash3-fill" data-idSubcategories="<?= $subcategory->id_sub_categories ?>"></i>
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

        <div class="modal fade" id="deleteSubcategory" tabindex="-1" aria-labelledby="deleteSubcategoryLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteSubcategoryLabel">Supprimer la sous-catégorie</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Êtes-vous sûr de bien vouloir supprimer la sous-catégorie ? Cette action est irrévocable.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <a type="button" class="btn btn-danger" id="deleteLinkSubcategory">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php } ?>