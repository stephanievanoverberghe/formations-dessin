<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>

<?php }
if ($comment) { ?>
    <main>
        <section id="editComment">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="text-center mb-5"><?= $comment->title ?></h1>
                    </div>
                </div>
                <div class="row justify-content-center editComment px-4 py-5">
                    <div>
                        <div class="col-12">
                            <h2>Contenu</h2>
                            <p><?= $comment->content ?></p>
                        </div>
                        <div class="col-12">
                            <h2>Appartient à l'article</h2>
                            <p><?= $comment->id_articles ?></p>
                        </div>
                        <div class="col-12">
                            <h2 class="">Créé le</h2>
                            <p><?= date('d.m.Y', strtotime($comment->created_at)) ?></p>
                        </div>
                        <div class="col-12 mt-5">

                            <form action="" method="POST" role="form">
                                <div class="row">
                                    <div class="col-6 text-end">
                                        <a class="deleteComments btn" data-bs-toggle="modal" data-bs-target="#deleteComments" data-idComments="">Refuser
                                            <i class="bi bi-trash3-fill" data-idComments=""></i>
                                        </a>
                                    </div>
                                    <div class="col-6 text-start">
                                        <a href="" class="btn">Valider
                                            <i class="bi bi-check2"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <a href="/controllers/dashboard/list/admin-commentsCtrl.php" class="my-5"><i class="bi bi-arrow-left-circle-fill"></i> Retour</a>
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
<?php } ?>