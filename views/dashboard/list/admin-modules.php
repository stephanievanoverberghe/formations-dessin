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
                        <a href="/controllers/dashboard/add/modulesCtrl.php"><i class="bi bi-plus-square-fill"></i></a>
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
                                    <td>
                                        <a href="/controllers/dashboard/edit/modulesCtrl.php?id_modules=<?= htmlentities($module->id_modules) ?>"><i class="bi bi-eye-fill"></i></a>
                                        <a href="/controllers/dashboard/update/modulesCtrl.php?id_modules=<?= htmlentities($module->id_modules) ?>" class="mx-3"><i class="bi bi-pencil-fill"></i></a>
                                        <a class="delete" data-bs-toggle="modal" data-bs-target="#deleteModules" data-idModules="<?= htmlentities($module->id_modules) ?>">
                                            <i class="bi bi-trash3-fill" data-idModules="<?= htmlentities($module->id_modules) ?>"></i>
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
        <!-- Modal -->
        <div class="modal fade" id="deleteModules" tabindex="-1" aria-labelledby="deleteModuleLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModuleLabel">Supprimer le module</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Êtes-vous sûr de bien vouloir supprimer le module ? Cette action est irrévocable.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <a type="button" class="btn btn-danger" id="deleteLinkModule">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php } ?>