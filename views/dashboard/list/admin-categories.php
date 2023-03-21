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
                                        <td><?= htmlentities($category->title) ?></td>
                                        <td><a href="/controllers/magazine/categorieCtrl.php?=<?= htmlentities($category->id_categories) ?>"><i class="bi bi-eye-fill"></i></a></td>
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