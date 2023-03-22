<?php if (isset($errors['global'])) { ?>

<div class="alert alert-warning" role="alert">
    <?= nl2br($errors['global']) ?>
</div>

<?php } 
if ($module) { ?>
    <main>
        <section id="editModule">
            <div class="container">  
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="text-center mb-5"><?= $module->title ?></h1>
                    </div>
                </div>
                <div class="row justify-content-center editModule px-4 py-5">
                    <div>
                        <div class="col-12">
                            <h2>Contenu</h2>
                            <p><?= $module->content ?></p>
                        </div>
                        <div class="col-12">
                            <h2 class="mt-5">Créé le</h2>
                            <p><?= date('d.m.Y', strtotime($module->created_at)) ?></p>
                            <h2 class="mt-5">Modifié le</h2>
                            <p><?= date('d.m.Y', strtotime($module->updated_at)) ?></p>
                            <h2 class="mt-5">Désactivé le</h2>
                            <p><?= $module->disabled_at ?? $disabled_at ?? '' ?></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <a href="/controllers/dashboard/list/admin-modulesCtrl.php" class="my-5" ><i class="bi bi-arrow-left-circle-fill"></i> Retour</a>
                </div>
            </div>
        </section>
    </main>
<?php } ?>