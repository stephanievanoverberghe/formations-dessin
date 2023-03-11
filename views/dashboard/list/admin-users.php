<?php if (isset($errors['global'])) { ?>

<div class="alert alert-warning" role="alert">
    <?= nl2br($errors['global']) ?>
</div>

<?php } else { ?>
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class=" col-lg-11 mt-5">
                <h1 class="mb-5 text-center">Utilisateurs</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($users as $user) {
                            ?>
                        <tr>
                            <td><?= htmlentities($user->lastname) ?></td>
                            <td><?= htmlentities($user->firstname) ?></td>
                            <td><a href="emailto:<?= htmlentities($user->email) ?>"><?= htmlentities($user->email) ?></a></td>
                            <td><a href="/controllers/dashboard/edit/usersCtrl.php"><i class="bi bi-eye-fill"></i></a></td>
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