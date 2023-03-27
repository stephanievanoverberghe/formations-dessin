<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>
<?php } ?>

<main>
    <div class="container">
        <div id="addSubcategory">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="mb-5 text-center"><?= (isset($id_sub_categories)) ? 'Modifier le' : 'Ajouter une' ?> sous-catégorie</h1>
                    <!-- START FORM -->
                    <form 
                        class="mb-5 formSubcategory" 
                        role="form" 
                        id="formSubcategory" 
                        method="POST" 
                        action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>?id_sub_categories=<?= $id_sub_categories ?? '' ?>"
                        >
                        <div class="form mb-4">
                            <!-- TITLE -->
                            <label for="title" class="form_label orange mt-5 mb-2">Titre
                                <span class="orange"> *</span>
                            </label>
                            <input 
                                type="text" 
                                value="<?= $subcategory->title ?? $title ?? '' ?>" 
                                class="form-control <?= isset($errors['title']) ? 'is-invalid' : '' ?>" 
                                id="title" 
                                name="title" 
                                required
                            >
                            <div class="error"><?= $errors['title'] ?? '' ?></div>
                            <!-- CONTENT -->
                            <label for="content" class="form_label orange mt-5 mb-2">Contenu
                                <span class="orange"> *</span>
                            </label>
                            <textarea class="form-control" name="content" id="content" rows="10" required><?= $subcategory->content ?? $content ?? '' ?></textarea>
                            <div class="error"><?= $errors['content'] ?? '' ?></div>
                            <!-- CATEGORY -->
                            <label for="id_categories" class="form-label orange mt-5 mb-2">Catégorie *</label>
                            <select name="id_categories" id="id_categories" class="form-select" required>
                                <?php
                                foreach ($allCategories as $category) {
                                    $state = ($category->id_categories == $subcategories->id_categories) ? "selected" : "";
                                    echo '<option value="' . $category->id_categories . '" ' .  $state  . '>' . $category->title . '</option>';
                                }
                                ?>
                            </select>
                            <!-- VALIDATE FORM -->
                            <div class="col-12 text-center">
                                <input class="btn my-5" type="submit" value="Valider"></input>
                            </div>
                            <div class="col-12">
                                <a href="/controllers/dashboard/list/admin-subcategoriesCtrl.php" class="my-5"><i class="bi bi-arrow-left-circle-fill"></i> Retour</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>