<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>
<?php } ?>


<main>
    <div class="container">
        <div id="addVideo">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="mb-5 text-center"><?= (isset($id_videos)) ? 'Modifier la' : 'Ajouter une' ?> video</h1>
                    <!-- START FORM -->
                    <form class="mb-5 formVideo" role="form" id="formVideo" method="POST" enctype="multipart/form-data">
                        <div class="form mb-4">
                            <!-- TITLE -->
                            <label for="title" class="form_label orange mt-5 mb-2">Titre
                                <span class="orange"> *</span>
                            </label>
                            <input type="text" value="<?= $video->title ?? $title ?? '' ?>" class="form-control <?= isset($errors['title']) ? 'is-invalid' : '' ?>" id="title" name="title" required>
                            <div class="error"><?= $errors['title'] ?? '' ?></div>
                            <!-- FILE -->
                            <label for="video" class="form_label orange mt-5 mb-2">Fichier
                                <span class="orange"> *</span>
                            </label>
                            <input class="form-control form-control-lg <?= isset($errors['file']) ? 'is-invalid' : '' ?>" id="video" type="file" name="file" value="<?= $video->file ?? $file ?? '' ?>">
                            <div class="error"><?= $errors['file'] ?? '' ?></div>
                            <!-- VALIDATE FORM -->
                            <div class="col-12 text-center">
                                <input class="btn my-5" type="submit" value="Valider"></input>
                            </div>
                            <div class="col-12">
                                <a href="/controllers/dashboard/list/admin-videosCtrl.php" class="my-5"><i class="bi bi-arrow-left-circle-fill"></i> Retour</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>