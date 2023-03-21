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
                                        <td><?= htmlentities($subcategory->title) ?></td>
                                        <td><?= htmlentities($subcategory->id_categories) ?></td>
                                        <td><a href="/controllers/magazine/subCategorieCtrl.php?=<?= htmlentities($subcategory->id_sub_categories) ?>"><i class="bi bi-eye-fill"></i></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php } ?>