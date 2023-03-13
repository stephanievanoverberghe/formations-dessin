<?php if (isset($errors['global'])) { ?>

<div class="alert alert-warning" role="alert">
    <?= nl2br($errors['global']) ?>
</div>

<?php } 
if ($training) { ?>
    <main>
        <section id="editTraining">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="text-center mb-5"><?= $training->title ?? $title ?? '' ?></h1>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <h2>Contenu</h2>
                        <p><?= $training->content ?? $content ?? '' ?></p>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mt-5">Créé le</h2>
                        <p><?= $training->created_at ?? $created_at ?? '' ?></p>
                        <h2 class="mt-5">Modifié le</h2>
                        <p><?= $training->updated_at ?? $updated_at ?? '' ?></p>
                        <h2 class="mt-5">Désactivé le</h2>
                        <p><?= $training->disabled_at ?? $disabled_at ?? '' ?></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php } ?>