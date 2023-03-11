<?php if (isset($errors['global'])) { ?>

<div class="alert alert-warning" role="alert">
    <?= nl2br($errors['global']) ?>
</div>

<?php } else { ?>
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-11 mt-5">
                <h1 class="mb-5 text-center">Liste des modules</h1>
                <div class="formModule text-end">
                    <a href="/controllers/dashboard/add/modulesCtrl.php" ><i class="bi bi-plus-square-fill"></i></a>
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
                        foreach ($modules as $module) {
                            ?>
                        <tr>
                            <td><?= htmlentities($module->title) ?></td>
                            <td><a href="#"><i class="bi bi-eye-fill"></i></a></td>
                        </tr>
                    <?php }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </main>
<?php } ?>