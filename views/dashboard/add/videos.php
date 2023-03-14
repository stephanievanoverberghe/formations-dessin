<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>
<?php }

if ($video) { ?>

    <main>
        <div class="container">
            <div id="addVideo">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 class="mb-5 text-center">Ajouter une video</h1>
                        <!-- START FORM -->
                        <form class="mb-5 formVideo" role="form" id="formVideo" method="POST">
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
                                <input class="form-control form-control-lg" id="video" type="file" name="file">
                                <div class="error"><?= $errors['content'] ?? '' ?></div>
                                <!-- VALIDATE FORM -->
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
<?php } ?>