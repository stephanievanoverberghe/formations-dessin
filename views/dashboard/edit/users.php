<?php if (isset($errors['global'])) { ?>

<div class="alert alert-warning" role="alert">
    <?= nl2br($errors['global']) ?>
</div>

<?php } 
if ($user) { ?>
    <main>
        <section id="editUser">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="text-center mb-5"><?= $user->lastname ?? $lastname ?? '' ?> <?= $user->firstname ?? $firstname ?? '' ?></h1>
                    </div>
                </div>
                <div class="row justify-content-center editUser px-4 py-5">
                    <div class="col-lg-6">
                        <h2>Email</h2>
                        <a href="emailto:<?= $user->email ?>"><?= $user->email?></a>
                        <h2 class="mt-5">Pseudo</h2>
                        <p><?= $user->pseudo ?></p>
                        <h2 class="mt-5">Anniversaire</h2>
                        <p><?= date('d.m.Y', strtotime($user->birthdate)) ?></p>
                        <h2 class="mt-5">Pays</h2>
                        <p><?= $user->country ?></p>
                    </div>
                    <div class="col-lg-5">

                        <h2 class="mt-5">Créé le</h2>
                        <p><?= date('d.m.Y', strtotime($user->created_at)) ?></p>
                        <h2 class="mt-5">Validé le</h2>
                        <p><?= $user->validated_at ?? $validated_at ?? '' ?></p>
                        <h2 class="mt-5">Modifié le</h2>
                        <p><?= $user->updated_at ?? $updated_at ?? '' ?></p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <a href="/controllers/dashboard/list/admin-usersCtrl.php" class="my-5" ><i class="bi bi-arrow-left-circle-fill"></i> Retour</a>
                </div>
            </div>
        </section>
    </main>
<?php } ?>