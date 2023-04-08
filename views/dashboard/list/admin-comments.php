<main>

    <section id="pending-comment">
        <div class="container-fluid">
            <section id="searchComments">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <!-- RESEARCH -->
                        <form action="admin-commentsCtrl.php" class="d-flex mt-3 mb-5" method="GET" role="search">
                            <input class="research form-control me-2" type="search" name="search" value="<?= $search ?? '' ?>" placeholder="Rechercher" aria-label="Search">
                            <button class="btn" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
            </section>
            <div class="row justify-content-center">
                <div class="col-lg-11 mt-5">
                    <h1 class="mb-5 text-center">Commentaires</h1>
                    <h2 class="text-center">En attente</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Auteur(e)</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Crée le</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($comments as $comment) {
                            ?>
                                <tr>
                                    <td><?= $comment->id_users ?></td>
                                    <td><?= $comment->title ?></td>
                                    <td><?= date('d.m.Y', strtotime($comment->created_at)) ?></td>
                                    <td>
                                        <a href="/controllers/dashboard/edit/commentsCtrl.php?id_comments=<?= $comment->id_comments ?>"><i class="bi bi-eye-fill"></i></a>
                                        <a href="" class="mx-3"><i class="bi bi-pencil-fill"></i></a>
                                        <a class="deleteComments" data-bs-toggle="modal" data-bs-target="#deleteComments" data-idComments="">
                                            <i class="bi bi-trash3-fill" data-idComments=""></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <section id="comments-list">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-11 mt-5">
                        <h2 class="mb-5 text-center">Validés</h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Auteur(e)</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Validé le</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href=""><i class="bi bi-eye-fill"></i></a>
                                        <a href="" class="mx-3"><i class="bi bi-pencil-fill"></i></a>
                                        <a class="deleteComments" data-bs-toggle="modal" data-bs-target="#deleteComments" data-idComments="">
                                            <i class="bi bi-trash3-fill" data-idComments=""></i>
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade" id="deleteComments" tabindex="-1" aria-labelledby="deleteCommentabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteCommentLabel">Supprimer le commentaire</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Êtes-vous sûr de bien vouloir supprimer ce commentaire ? Cette action est irrévocable.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <a type="button" class="btn btn-danger" id="deleteLinkComment">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
</main>