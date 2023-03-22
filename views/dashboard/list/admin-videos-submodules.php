<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>

<?php } else { ?>
    <main>
        <section id="videos-submodules-list">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-11 mt-5">
                        <h1 class="mb-5 text-center">Liste des vidéos associées aux sous-modules</h1>
                        <div class="formCategory text-end">
                            <a href="/controllers/dashboard/add/videos-submodulesCtrl.php"><i class="bi bi-plus-square-fill"></i></a>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Sous-modules</th>
                                    <th scope="col">Vidéos</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($submodules_videos as $submodule_video) {
                                ?>
                                    <tr>
                                        <td><?= $submodule_video->id_sub_modules ?></td>
                                        <td><?= $submodule_video->id_videos ?></td>
                                        <td>
                                            <a href=""><i class="bi bi-eye-fill"></i></a>
                                            <a href="" class="mx-3"><i class="bi bi-pencil-fill"></i></a>
                                            <a class="deleteVideo" data-bs-toggle="modal" data-bs-target="#deleteVideos" data-idVideos="">
                                                <i class="bi bi-trash3-fill" data-idVideos=""></i>
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
            <div class="modal fade" id="deleteVideos" tabindex="-1" aria-labelledby="deleteVideoLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="deleteVideoLabel">Supprimer la video</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Êtes-vous sûr de bien vouloir supprimer la video ? Cette action est irrévocable.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <a type="button" class="btn btn-danger" id="deleteLinkVideo">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php } ?>