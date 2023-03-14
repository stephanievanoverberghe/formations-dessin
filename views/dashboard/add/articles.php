<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>
<?php }
if ($article) { ?>

    <main>
        <div class="container">
            <div id="addArticle">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 class="mb-5 text-center">Ajouter un article</h1>
                        <!-- START FORM -->
                        <form class="mb-5 formArticle" role="form" id="formArticle" method="POST">
                            <div class="form mb-4">
                                <!-- H1 TITLE -->
                                <label for="title" class="form_label orange mt-5 mb-2">Titre
                                    <span class="orange"> *</span>
                                </label>
                                <input type="text" value="<?= $article->title ?? $title ?? '' ?>" class="form-control <?= isset($errors['title']) ? 'is-invalid' : '' ?>" id="title" name="title" required>
                                <div class="error"><?= $errors['title'] ?? '' ?></div>
                                <!-- PARAGRAPH CATCH -->
                                <label for="catch" class="form_label orange mt-5 mb-2">Accroche
                                    <span class="orange"> *</span>
                                </label>
                                <textarea class="form-control" name="catch" id="catch" rows="3" required></textarea>
                                <div class="error"><?= $errors['catch'] ?? '' ?></div>
                                <!-- H2 TITLE -->
                                <label for="subTitleOne" class="form_label orange mt-5 mb-2">Premier Sous-titre
                                    <span class="orange"> *</span>
                                </label>
                                <input type="text" value="<?= $article->subTitleOne ?? $subTitleOne ?? '' ?>" class="form-control <?= isset($errors['subTitleOne']) ? 'is-invalid' : '' ?>" id="subTitleOne" name="subTitleOne" required>
                                <!-- PICTURE -->
                                <label for="imgOne" class="form_label orange mt-5 mb-2">Image
                                    <span class="orange"> *</span>
                                </label>
                                <input class="form-control" type="file" id="imgOne" name="imgOne" value="" required>
                                <!-- PARAGRAPH ONE -->
                                <label for="paragraphOne" class="form_label orange mt-5 mb-2">Premier paragraphe
                                    <span class="orange"> *</span>
                                </label>
                                <textarea class="form-control" name="paragraphOne" id="paragraphOne" rows="10" required></textarea>
                                <div class="error"><?= $errors['catch'] ?? '' ?></div>
                                <!-- H2 TITLE -->
                                <label for="subTitleTwo" class="form_label orange mt-5 mb-2">Deuxième Sous-titre
                                    <span class="orange"> *</span>
                                </label>
                                <input type="text" value="<?= $article->subTitleTwo ?? $subTitleTwo ?? '' ?>" class="form-control <?= isset($errors['subTitleOne']) ? 'is-invalid' : '' ?>" id="subTitleTwo" name="subTitleTwo" required>
                                <!-- PICTURE -->
                                <label for="imgTwo" class="form_label orange mt-5 mb-2">Image
                                    <span class="orange"> *</span>
                                </label>
                                <input class="form-control" type="file" id="imgTwo" name="imgTwo" value="" required>
                                <!-- PARAGRAPH TWO -->
                                <label for="paragraphTwo" class="form_label orange mt-5 mb-2">Deuxième paragraphe
                                    <span class="orange"> *</span>
                                </label>
                                <textarea class="form-control" name="paragraphTwo" id="paragraphTwo" rows="10" required></textarea>
                                <div class="error"><?= $errors['catch'] ?? '' ?></div>


                                <!-- CREATED_AT -->
                                <label for="created_at" class="form_label orange mt-5 mb-2">Créé le
                                    <span class="orange"> *</span>
                                </label>
                                <input type="date" name="created_at" id="created_at" value="" class="form-control">
                                <div class="error"></div>
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