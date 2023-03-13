<?php if(isset($errors['global'])) {?>
    
    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global'])?>
    </div>
<?php } ?>

<main>
    <div class="container">
        <div id="addModule">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="mb-5 text-center">Ajouter un module</h1>
                    <!-- START FORM -->
                    <form 
                        class="mb-5 formModule"
                        role="form"
                        id="formModule"
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
                                value="<?= $module->title ?? $title ?? '' ?>"
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
                            <!-- FORMATION -->
                            <label for="id_trainings" class="form-label orange mt-5 mb-2">Formation *</label>
                            <select 
                                name="id_trainings" 
                                id="id_trainings"
                                class="form-select"
                                required
                            >
                            <?php
                            foreach ($allTrainings as $training) {
                                $state = (isset($id_trainings)) && ($training->id_trainings == $id_trainings) ? "selected" : "";
                                echo '<option value="' . $training->id_trainings . '" ' .  $state  . '>' . $training->title . '</option>';
                            } 
                            ?>
                            </select>
                            <div class="error"><?=$errors['id_trainings'] ?? ''?></div>
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