<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>
    
<?php } ?>

    <main>
        <div class="container">
            <div id="addTraining">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 class="mb-5 text-center"><?= (isset($id_trainings)) ? 'Modifier la' : 'Ajouter une' ?> formation</h1>
                        <!-- START FORM -->
                        <form class="mb-5 formTraining" role="form" id="formTraining" method="POST">
                            <div class="form mb-4">
                                <!-- TITLE -->
                                <label for="title" class="form_label orange mt-5 mb-2">Titre
                                    <span class="orange"> *</span>
                                </label>
                                <input type="text" value="<?= $training->title ?? $title ?? '' ?>" class="form-control <?= isset($errors['title']) ? 'is-invalid' : '' ?>" id="title" name="title" required>
                                <div class="error"><?= $errors['title'] ?? '' ?></div>
                                <!-- CONTENT -->
                                <label for="content" class="form_label orange mt-5 mb-2">Contenu
                                    <span class="orange"> *</span>
                                </label>
                                <textarea class="form-control" name="content" id="content" rows="10" required><?= $training->content ?? $content ?? '' ?></textarea>
                                <div class="error"><?= $errors['content'] ?? '' ?></div>
                                <!-- VALIDATE FORM -->
                                <div class="mt-3">
                                    <a href="/controllers/dashboard/list/admin-trainingsCtrl.php"><i class="bi bi-arrow-left-circle-fill"></i> Retour</a>
                                </div>
                                <div class="col-12 text-center">
                                    <input class="btn my-5" type="submit" value="Valider"></input>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>