<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>
<?php } ?>

<main>
    <section id="addSubmodule">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="mb-5 text-center">Ajouter une vidéo à un sous module</h1>
                    <!-- START FORM -->
                    <form class="mb-5 formSubmodule" role="form" id="formSubmodule" method="POST" action="">
                        <div class="form mb-4">
                            <!-- SUBMODULE -->
                            <label for="id_sub_modules" class="form-label orange mt-5 mb-2">Sous-module *</label>
                            <select name="id_sub_modules" id="id_sub_modules" class="form-select" required>
                                <?php
                                foreach ($allSubmodules as $submodule) {
                                    $state = ($submodule->id_sub_modules == $submodulesVideos->id_sub_modules) ? "selected" : "";
                                    echo '<option value="' . $submodule->id_sub_modules . '" ' .  $state  . '>' . $submodule->title . ' ' . '</option>';
                                }
                                ?>
                            </select>
                            <div class="error"><?= $errors['id_sub_modules'] ?? '' ?></div>
                            <!-- VIDEO -->
                            <label for="id_videos" class="form-label orange mt-5 mb-2">Video *</label>
                            <select name="id_videos" id="id_videos" class="form-select" required>
                                <?php
                                foreach ($allVideos as $video) {
                                    $state = ($video->id_videos == $submodulesVideos->id_videos) ? "selected" : "";
                                    echo '<option value="' . $video->id_videos . '" ' .  $state  . '>' . $video->title . ' ' . '</option>';
                                }
                                ?>
                            </select>
                            <div class="error"><?= $errors['id_videos'] ?? '' ?></div>
                            <!-- VALIDATE FORM -->
                            <div class="col-12 text-center">
                                <input class="btn my-5" type="submit" value="Valider"></input>
                            </div>
                            <div class="col-12">
                                <a href="/controllers/dashboard/list/admin-submodulesCtrl.php" class="my-5"><i class="bi bi-arrow-left-circle-fill"></i> Retour</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>