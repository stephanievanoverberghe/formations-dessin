<?php if (isset($errors['global'])) { ?>

<div class="alert alert-warning" role="alert">
    <?= nl2br($errors['global']) ?>
</div>

<?php } else { ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-11 mt-5">
            <h1 class="mb-5 text-center">Liste des articles</h1>
            <div class="formCategory text-end">
                <a href="/controllers/dashboard/add/articlesCtrl.php" ><i class="bi bi-plus-square-fill"></i></a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Sous-catégorie</th>
                        <th scope="col">Créé le</th>
                        <th scope="col">Archivé le</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($articles as $article) {
                    ?>
                    <tr>
                        <td><?= htmlentities($article->title) ?></td>
                        <td><?= htmlentities($article->slug) ?></td>
                        <td><a href="/controllers/magazine/articleCtrl.php?=<?= htmlentities($article->id) ?>"><i class="bi bi-eye-fill"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php } ?>