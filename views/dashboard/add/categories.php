<?php if(isset($errors['global'])) {?>
    
    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global'])?>
    </div>
<?php } 
if ($category){ ?>

<main>
    <div class="container">
        <div id="addCategory">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="mb-5 text-center">Ajouter une catégorie</h1>
                    <!-- START FORM -->
                    <form 
                        class="mb-5 formCategory"
                        role="form"
                        id="formCategory"
                        method="POST">
                        <div class="form mb-4">
                            <!-- TITLE -->
                            <label for="title" class="form_label orange mt-5 mb-2">Titre
                                <span class="orange"> *</span>
                            </label>
                            <input 
                                type="text"
                                value="<?= $category->title ?? $title ?? '' ?>"
                                class="form-control <?= isset($errors['title']) ? 'is-invalid' : ''?>"
                                id="title"
                                name="title"
                                required
                            >
                            <div class="error"><?=$errors['title'] ?? ''?></div>
                            <!-- SLUG -->
                            <label for="category" class="form_label orange mt-5 mb-2">Slug
                                <span class="orange"> *</span>
                            </label>
                            <input 
                                type="text"
                                value="<?= $category->slug ?? $slug ?? '' ?>"
                                class="form-control <?= isset($errors['slug']) ? 'is-invalid' : ''?>"
                                id="slug"
                                name="slug"
                                required
                            >
                            <div class="error"><?=$errors['slug'] ?? ''?></div>
                            <!-- VALIDATE FORM -->
                            <div class="col-12 text-center">
                                <input class="btn my-5" type="submit"value="Valider"></input>
                            </div>
                        </div>
                    </form>              
                </div>
            </div>
        </div>
    </div>
</main>
<?php } ?>