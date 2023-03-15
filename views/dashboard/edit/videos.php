<?php if (isset($errors['global'])) { ?>

<div class="alert alert-warning" role="alert">
    <?= nl2br($errors['global']) ?>
</div>

<?php } 
if ($video) { ?>
    <main>
        <section id="editVideo">
            <div class="container">  
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="text-center mb-5"><?= htmlentities($video->title) ?? $title ?? '' ?></h1>
                    </div>
                </div>
                <div class="row justify-content-center editVideo px-4 py-5">
                    <div>
                        <div class="col-12">
                            <h2>Fichier</h2>
                            <p><?= htmlentities($video->file) ?? $file ?? '' ?></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <a href="/controllers/dashboard/list/admin-videosCtrl.php" class="mt-5" ><i class="bi bi-arrow-left-circle-fill"></i> Retour</a>
                </div>
            </div>
        </section>
    </main>
<?php } ?>