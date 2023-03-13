<?php if (isset($errors['global'])) { ?>

<div class="alert alert-warning" role="alert">
    <?= nl2br($errors['global']) ?>
</div>

<?php } else { ?>
<main>
    <div class="container-fluid">
        <section id="searchSubmodules">
            <div class="row justify-content-center">
                <div class="col-6">
                    <!-- RESEARCH -->
                    <form
                        action="admin-submodulesCtrl.php"
                        class="d-flex mt-3 mb-5"
                        method="GET"
                        role="search"
                        >
                        <input 
                            class="reseach form-control me-2" 
                            type="search"
                            name="search"
                            value="<?= $search ?? '' ?>"
                            placeholder="Rechercher" 
                            aria-label="Search">
                        <button class="btn" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </section>
        <div class="row justify-content-center">
            <div class="col-lg-11 mt-5">
                <h1 class="mb-5 text-center">Liste des sous-modules</h1>
                <div class="formSubmodule text-end">
                    <a href="/controllers/dashboard/add/submodulesCtrl.php" ><i class="bi bi-plus-square-fill"></i></a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Titre</th>
                            <th scope="col">Module</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($submodules as $submodule) {
                            ?>
                        <tr>
                            <td><?= htmlentities($submodule->title) ?></td>
                            <td><?= htmlentities($submodule->id_modules) ?></td>
                            <td><a href="#"><i class="bi bi-eye-fill"></i></a></td>
                        </tr>
                    <?php }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php } ?>