<?php if (isset($errors['global'])) { ?>

<div class="alert alert-warning" role="alert">
    <?= nl2br($errors['global']) ?>
</div>

<?php } 
if ($submodule) { ?>
    <main>
        <section id="editSubmodule">
            <div class="container">  
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="text-center mb-5"><?= htmlentities($submodule->title) ?? $title ?? '' ?></h1>
                    </div>
                </div>
                <div class="row justify-content-center editSubmodule px-4 py-5">
                    <div>
                        <div class="col-12">
                            <h2>Contenu</h2>
                            <p><?= htmlentities($submodule->content) ?? $content ?? '' ?></p>
                        </div>
                        <div class="col-12">
                            <h2>Appartient au module</h2>
                            <p><?= htmlentities($submodule->id_modules) ?? $id_modules ?? '' ?></p>
                            <h2 class="mt-5">Créé le</h2>
                            <p><?= htmlentities(date('d.m.Y', strtotime($submodule->created_at))) ?? $created_at ?? '' ?></p>
                            <h2 class="mt-5">Modifié le</h2>
                            <p><?= htmlentities(date('d.m.Y', strtotime($submodule->updated_at))) ?? $updated_at ?? '' ?></p>
                            <h2 class="mt-5">Désactivé le</h2>
                            <p><?= $module->disabled_at ?? $disabled_at ?? '' ?></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <a href="/controllers/dashboard/list/admin-submodulesCtrl.php" class="my-5" ><i class="bi bi-arrow-left-circle-fill"></i> Retour</a>
                </div>
            </div>
        </section>
    </main>
<?php } ?>