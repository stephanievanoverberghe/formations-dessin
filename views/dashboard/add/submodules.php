<?php if(isset($errors['global'])) {?>
    
    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global'])?>
    </div>
<?php } ?>

<main>
    <div class="container">
        <div id="addSubmodule">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="mb-5 text-center">Ajouter un sous module</h1>
                    <!-- START FORM -->
                    <form 
                        class="mb-5 formSubmodule"
                        role="form"
                        id="formSubmodule"
                        method="POST"
                        action=""
                        >
                        <div class="form mb-4">
                            <!-- TITLE -->
                            <label for="title" class="form_label orange mt-5 mb-2">Titre
                                <span class="orange"> *</span>
                            </label>
                            <input 
                                type="text"
                                value="<?= $submodule->title ?? $title ?? '' ?>"
                                class="form-control <?= isset($errors['title']) ? 'is-invalid' : ''?>"
                                id="title"
                                name="title"
                                required
                            >
                            <div class="error"><?=$errors['title'] ?? ''?></div>
                            <!-- CONTENT -->
                            <label for="content" class="form_label orange mt-5 mb-2">Contenu
                                <span class="orange"> *</span>
                            </label>
                            <textarea 
                                class="form-control"
                                name="content" 
                                id="content"
                                rows="10"
                                required
                            >
                            </textarea>
                            <div class="error"><?=$errors['content'] ?? ''?></div>
                            <!-- MODULE -->
                            <label for="id_modules" class="form-label orange mt-5 mb-2">Module *</label>
                            <select 
                                name="id_modules" 
                                id="id_modules"
                                class="form-select"
                                required
                            >
                            <?php
                            foreach ($allModules as $module) {
                                $state = isset($id_modules) && ($module->id_modules == $id_modules) ? "selected" : "";
                                echo '<option value="' . $module->id_modules . '" ' .  $state  . '>' . $module->title . ' ' . '</option>';
                            } 
                            ?>
                            </select>
                            <div class="error"><?=$errors['id_modules'] ?? ''?></div>
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