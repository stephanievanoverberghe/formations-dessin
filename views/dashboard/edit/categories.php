<?php if (isset($errors['global'])) { ?>

<div class="alert alert-warning" role="alert">
    <?= nl2br($errors['global']) ?>
</div>

<?php } 
if ($category) { ?>
    <main>
        <section id="editCategory">
            <div class="container">  
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="text-center mb-5"><?= $category->title?></h1>
                    </div>
                </div>
                <div class="row justify-content-center editCategory px-4 py-5">
                    <div>
                        <div class="col-12">
                            <h2>Contenu</h2>
                            <p><?= $category->content?></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <a href="/controllers/dashboard/list/admin-categoriesCtrl.php" class="mt-5" ><i class="bi bi-arrow-left-circle-fill"></i> Retour</a>
                </div>
            </div>
        </section>
    </main>
<?php } ?>