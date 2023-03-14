<?php if (isset($errors['global'])) { ?>

<div class="alert alert-warning" role="alert">
    <?= nl2br($errors['global']) ?>
</div>

<?php } else { ?>
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-11 mt-5">
                <h1 class="mb-5 text-center">Liste des Formations</h1>
                <div class="formCategory text-end">
                    <a href="/controllers/dashboard/add/trainingsCtrl.php" ><i class="bi bi-plus-square-fill"></i></a>
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
                        foreach ($trainings as $training) {
                            ?>
                        <tr>
                            <td><?= htmlentities($training->title) ?></td>
                            <td>
                                <a href="/controllers/dashboard/edit/trainingsCtrl.php?id_trainings=<?= htmlentities($training->id_trainings) ?>"><i class="bi bi-eye-fill"></i></a>
                                <a href="/controllers/dashboard/update/trainingsCtrl.php?id_trainings=<?= htmlentities($training->id_trainings) ?>" class="mx-3"><i class="bi bi-pencil-fill"></i></a>
                                <a 
                                    class="delete" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#deleteTraining" 
                                    data-idTrainings="<?= htmlentities($training->id_trainings) ?>"
                                    >
                                    <i class="bi bi-trash3-fill" data-idTrainings="<?= htmlentities($training->id_trainings) ?>"></i>
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
<div class="modal fade" id="deleteTraining" tabindex="-1" aria-labelledby="deleteTrainingLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="deleteTrainingLabel">Supprimer la formation</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Êtes-vous sûr de bien vouloir supprimer la formation ? Cette action est irrévocable.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <a type="button" class="btn btn-danger" id="deleteLink">Supprimer</a>
        </div>
        </div>
    </div>
</div>
</main>
<?php } ?>