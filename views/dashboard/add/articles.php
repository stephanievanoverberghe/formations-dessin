<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>
<?php } ?>
<main>
    <section id="addArticle">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="mb-5 text-center"><?= (isset($id_articles)) ? 'Modifier l\'' : 'Ajouter un' ?> article</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="admin-article">
        <div class="container-fluid">
            <div>
                <div class="row justify-content-center">
                    <div class="col-10">

                        <!-- FORM ADD ARTICLE -->
                        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>?id_articles=<?= $id_articles ?? '' ?>" method="POST" role="form" class="formArticle" enctype="multipart/form-data">
                            <div class="row justify-content-center">
                                <!-- TITLE -->
                                <div class="col-8 mb-3">
                                    <label for="title" class="form_label orange mt-5 mb-2">Titre
                                        <span class="orange"> *</span>
                                    </label>
                                    <input type="text" value="<?= $article->title ?? $title ?? '' ?>" class="form-control form-control-lg <?= isset($errors['title']) ? 'is-invalid' : '' ?>" id="title" name="title" required>
                                    <div class="error"><?= $errors['title'] ?? '' ?></div>
                                </div>
                                <!-- HOOK -->
                                <div class="col-8 mb-3">
                                    <label for="textareaHook" class="form_label orange mt-4 mb-2">Accroche
                                        <span class="orange"> *</span>
                                    </label>
                                    <textarea class="form-control" name="textareaHook" id="textareaHook" rows="5" required><?= $article->hook ?? $hook ?? '' ?></textarea>
                                    <div class="error"><?= $errors['textareaHook'] ?? '' ?></div>
                                </div>
                                <!-- CONTENT -->
                                <div class="col-8 mb-3" id="input">
                                    <?php

                                    if (!empty($article->subtitle) && !empty($article->content)) {
                                        $subtitlesArray = unserialize($article->subtitle);
                                        foreach ($subtitlesArray as $subtitleArray) {
                                            echo '<label for="subtitle" class="form-label orange mt-4 mb-2">Sous-titre *</label></br><input type="text" value="' . $article->subtitle . '" id="sub-title" name="subtitle[]" class="form-control form-control-lg">';
                                        }

                                        $contentsArray = unserialize($article->content);
                                        foreach ($contentsArray as $contentArray) {
                                            echo '<label for="textareaContent" class="form-label orange mt-4 mb-2">Paragraphe *</label></br><textarea class="form-control" id="textareaContent" rows="10" name="textareaContent[]">' . $article->content . '</textarea>';
                                        }
                                    }
                                    ?>
                                </div>
                                <!-- CONCLUSION -->
                                <div class="col-8 mb-3">
                                    <label for="textareaConclusion" class="form_label orange mt-4 mb-2">Conclusion
                                        <span class="orange"> *</span>
                                    </label>
                                    <textarea class="form-control" name="textareaConclusion" id="textareaConclusion" rows="10" required><?= $article->conclusion ?? $conclusion ?? '' ?></textarea>
                                    <div class="error"><?= $errors['textareaConclusion'] ?? '' ?></div>
                                </div>
                                <!-- EXCERPT -->
                                <div class="col-8 mb-3">
                                    <label for="textareaExcerpt" class="form_label orange mt-4 mb-2">Extrait
                                        <span class="orange"> *</span>
                                    </label>
                                    <textarea class="form-control" name="textareaExcerpt" id="textareaExcerpt" rows="4" required><?= $article->excerpt ?? $excerpt ?? '' ?></textarea>
                                    <div class="error"><?= $errors['textareaExcerpt'] ?? '' ?></div>
                                </div>
                                <!-- FILE -->
                                <div class="col-8 mb-3">
                                    <label for="file" class="form_label orange mt-4 mb-2">Vignette
                                        <span class="orange"> *</span>
                                    </label>
                                    <input class="form-control form-control-lg <?= isset($errors['file']) ? 'is-invalid' : '' ?>" id="file" type="file" name="file" value="<?= $article->file ?? $file ?? '' ?>">
                                    <div class="error"><?= $errors['file'] ?? '' ?></div>
                                </div>


                            </div>
                            <!-- VALIDATE FORM -->
                            <div class="col-12 text-center">
                                <input class="btn my-5" type="submit" value="Valider"></input>
                            </div>
                            <div class="col-12 m-5">
                                <a href="/controllers/dashboard/list/admin-articlesCtrl.php" class="my-5">
                                    <i class="bi bi-arrow-left-circle-fill"></i>
                                    Retour
                                </a>
                            </div>
                        </form>


                    </div>

                    <div class="col-2 admin-article p-5">
                        <div class=" d-flex justify-content-center align-items-center"></div>
                        <div class="row text-center">
                            <div class="col-12 mb-4">
                                <button id="subtitle">Sous-titre</button>
                            </div>
                            <div class="col-12 mb-4">
                                <button id="content">Paragraphe</button>
                            </div>
                            <div class="col-12 mb-4">
                                <button id="picture">Image</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>