<?php if (isset($errors['global'])) { ?>

<div class="alert alert-warning" role="alert">
    <?= nl2br($errors['global']) ?>
</div>

<?php } 
if ($subcategory) { ?>
    <main>
        <section id="editSubcategory">
            <div class="container">  
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="text-center mb-5"><?= $subcategory->title?></h1>
                    </div>
                </div>
                <div class="row justify-content-center editSubcategory px-4 py-5">
                    <div>
                        <div class="col-12">
                            <h2>Contenu</h2>
                            <p><?= $subcategory->content?></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <a href="/controllers/dashboard/list/admin-subcategoriesCtrl.php" class="mt-5" ><i class="bi bi-arrow-left-circle-fill"></i> Retour</a>
                </div>
            </div>
        </section>
    </main>
<?php } ?>