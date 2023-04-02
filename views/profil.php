<?php if (isset($errors['global'])) { ?>

    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>
<?php } ?>

<main>

    <!-- START BANNER -->
    <section class="my-4 text-center" id="coverPicture">
        <div class="container-fluid">
            <div class="row">

                <div class="col profil-top">
                    <img src="/public/assets/img/profil_couverture.jpg" alt="Photo de couverture" class="banner">
                    <a href="" class="iconBanner"><i class="bi bi-camera"></i></a>
                    <div class="col text-center profilPicture">
                        <img src="/public/assets/img/autoportrait.jpg" alt="Photo de profil">
                        <a href="" class="icon"><i class="bi bi-camera"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->

    <!-- START BREADCRUMB -->
    <section>
        <div class="container" id="breadcrumb">
            <div class="row">
                <div class="col mb-3">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/controllers/homeCtrl.php">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="/controllers/profilCtrl.php">Profil</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $user->pseudo  ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB -->

    <!-- START PROFIL TITLE -->
    <section class="text-center mb-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mb-3"><?= $user->pseudo  ?></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END PROFIL TITLE -->

    <!-- START TABS -->
    <section id="profil">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- START NAV TABS -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item mb-3" role="presentation">
                            <button class="nav-link active" id="profil-tab" data-bs-toggle="tab" data-bs-target="#profil-tab-pane" type="button" role="tab" aria-controls="profil-tab-pane" aria-selected="true">Profil
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="parameter-tab" data-bs-toggle="tab" data-bs-target="#parameter-tab-pane" type="button" role="tab" aria-controls="parameter-tab-pane" aria-selected="false">Paramètres
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery-tab-pane" type="button" role="tab" aria-controls="gallery-tab-pane" aria-selected="false">Galerie
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages-tab-pane" type="button" role="tab" aria-controls="massages-tab-pane" aria-selected="false">Messages
                            </button>
                        </li>
                    </ul>
                    <!-- END NAV TABS -->

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="profil-tab-pane" role="tabpanel" aria-labelledby="profil-tab" tabindex="0">

                            <!-- START PROFIL -->
                            <div class="profilSection my-5 px-4 py-5">
                                <div class="row">
                                    <div class="col-12 mb-5">
                                        <h2 class="mb-4">A propos de moi</h2>
                                        <p class=""><?= $user->firstname ?? $firstname ?? '' ?> <?= $user->lastname ?? $lastname ?? '' ?></p>
                                        <p class=""><?= date('d.m.Y', strtotime($user->birthdate)) ?></p>
                                        <p class=""><?= $user->country ?></p>
                                    </div>
                                    <div class="col-12">
                                        <h2 class="mb-4">Information sur le compte</h2>
                                        <p>Email : <?= $user->email ?? $email ?? '' ?></p>
                                        <p>Date d'inscription : <?= date('d.m.Y', strtotime($user->validated_at)) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFIL -->

                        <div class="tab-pane fade" id="parameter-tab-pane" role="tabpanel" aria-labelledby="parameter-tab" tabindex="0">

                            <!-- START FORM PROFIL -->
                            <div class="profilParameter my-5 px-4 py-5">
                                <form method="POST" role="form" id="formUser" class="formUser" name="formUpdateInfo">
                                    <div class="container">
                                        <div class="row">
                                            <!-- PSEUDO -->
                                            <div class="col-lg-6">
                                                <h2 class="mb-3">Pseudo</h2>
                                                <input type="text" name="pseudo" class="form-control form-control-lg <?= isset($errors['pseudo']) ? 'is-invalid' : '' ?>" id="pseudo" placeholder="Ex: Norel-art" value="<?= $user->pseudo ?>" minlenght="2" maxlength="70">
                                                <small id=pseudoHelp class="form-text error"><?= $errors['pseudo'] ?? '' ?>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h2 class="mt-5">A propos de moi</h2>
                                            </div>
                                            <!-- FIRSTNAME -->
                                            <div class="col-lg-6 mt-3">
                                                <label for="firstname" class="form-label">Prénom
                                                </label>
                                                <input type="text" name="firstname" class="form-control form-control-lg <?= isset($errors['firstname']) ? 'is-invalid' : '' ?>" id="firstname" placeholder="Ex: Jean" value="<?= $user->firstname ?? $firstname ?? '' ?>" minlength="2" maxlength="70" pattern="<?= REGEXP_NO_NUMBER ?>">
                                                <small id="firstnameHelp" class="form-text error"><?= $errors['firstname'] ?? '' ?>
                                                </small>
                                            </div>
                                            <!-- LASTNAME -->
                                            <div class="col-lg-6 mt-3">
                                                <label for="lastname" class="form-label">Nom
                                                </label>
                                                <input type="text" name="lastname" class="form-control form-control-lg <?= isset($errors['lastname']) ? 'is-invalid' : '' ?>" id="lastname" placeholder="Ex: Dupond" value="<?= $user->lastname ?? $lastname ?? '' ?>" minlength="2" maxlength="70" pattern="<?= REGEXP_NO_NUMBER ?>">
                                                <small id="lastnameHelp" class="form-text error"><?= $errors['lastname'] ?? '' ?>
                                                </small>
                                            </div>
                                            <!-- COUNTRY -->
                                            <div class="col-lg-6 mt-3">
                                                <label for="country" class="form-label">Pays</label>
                                                <select name="country" id="country" class="form-control form-control-lg <?= isset($errors['country']) ? 'is-invalid' : '' ?>"" 
                                                    aria-describedby=" countryHelp">
                                                    <?php foreach (ARRAY_COUNTRIES as $countryInSelect) {
                                                        $isSelected = ($user->country == $countryInSelect) ? 'selected' : '';
                                                        echo "<option $isSelected>$countryInSelect</option>";
                                                    } ?>
                                                </select>
                                                <small id="countryHelp" class="form-text error"><?= $errors['country'] ?? '' ?>
                                                </small>
                                            </div>
                                            <!-- BIRTHDATE -->
                                            <div class="col-lg-6 mt-3">
                                                <label for="birthdate" class="form-label">Date de naissance</label>
                                                <input type="date" name="birthdate" id="birthdate" value="<?= $user->birthdate ?>" title="La date de naissance n'est pas au format attendu" placeholder="Ex: 13-01-1998" class="form-control form-control-lg <?= isset($errors['birthdate']) ? 'is-invalid' : '' ?>" aria-describedby="birthdateHelp" min="<?= (date('Y') - 120) . date('-m-d') ?>" max="<?= date('Y-m-d') ?>">
                                                <small id="birthdateHelp" class="form-text error"><?= $errors['birthdate'] ?? '' ?>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="btnParameter col-12 text-center mt-5 d-flex flex-column align-items-center">
                                                <input type="submit" value="Modifier" name="updateInfos" id="validForm">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- END FORM PROFIL -->

                            <!-- START FORM PARAMETER -->
                            <div class="formParameter my-5 px-4 py-5">
                                <form action="" method="POST" role="form" id="formUser" class="formUser" name="formUpdateEmail">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h2 class="mb-4">Changer d'email</h2>
                                            </div>
                                            <!-- EMAIL -->
                                            <div class="col-lg-6">
                                                <label for="email" class="form-label">Adresse actuelle
                                                    <span class="orange"> *</span>
                                                </label>
                                                <input type="mail" name="email" id="email" autocomplete="email" placeholder="sarahdupond@gmail.com" value="<?= $user->email ?>" class="form-control form-control-lg <?= isset($errors['email']) ? 'is-invalid' : '' ?>" required>
                                                <small id="emailError" class="form-text error"><?= $errors['email'] ?? '' ?>
                                                </small>
                                            </div>
                                            <div class="row">
                                                <div class="btnParameter col-12 text-center mt-5 mb-5 d-flex flex-column align-items-center">
                                                    <input type="submit" value="Modifier" name="FormUpdateEmail" id="validForm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form action="" method="post" role="form" id="formUser" class="formUser" name="formUpdatePassword">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h2 class="mb-4">Changer de mot de passe</h2>
                                            </div>
                                            <!-- ACTUAL PASSWORD -->
                                            <div class="col-lg-6 mb-3">
                                                <label for="password" class="form-label">Mot de passe actuel
                                                    <span class="orange"> *</span>
                                                </label>
                                                <input required type="password" name="password" id="password" value="" class="form-control form-control-lg <?= isset($errors['password']) ? 'is-invalid' : '' ?>" placeholder="Votre mot de passe*">
                                                <small id="passwordHelp" class="form-text error"><?= $errors['password'] ?? '' ?>
                                                </small>
                                            </div>
                                            <div class="offset-lg-6 mb-3"></div>
                                            <!-- PASSWORD -->
                                            <div class="col-lg-6">
                                                <label for="password" class="form-label">Nouveau mot de passe
                                                    <span class="orange"> *</span>
                                                </label>
                                                <input type="password" name="newPassword" value="<?= $newPassword ?? '' ?>" class="form-control form-control-lg <?= isset($errors['newPassword']) ? 'is-invalid' : '' ?>" id="newPassword" placeholder="Nouveau mot de passe" required>
                                                <small id="newPasswordHelp" class="form-text error"><?= $errors['newPassword'] ?? '' ?>
                                                </small>
                                            </div>
                                            <!-- CONFIRM PASSWORD -->
                                            <div class="col-lg-6">
                                                <label for="passwordCheck" class="form-label">Confirmation du nouveau mot de passe
                                                    <span class="orange"> *</span>
                                                </label>
                                                <input type="password" name="passwordCheck" id="passwordCheck" value="<?= $newPassword ?? '' ?>" class="form-control form-control-lg <?= isset($errors['newPassword']) ? 'is-invalid' : '' ?>" placeholder="Vérification du mot de passe" required>
                                                <small id="passwordCheckHelp" class="form-text error"><?= $errors['newPassword'] ?? '' ?>
                                                </small>
                                            </div>
                                            <div class="btnParameter col-12 text-center my-5 d-flex flex-column align-items-center">
                                                <input type="submit" value="Modifier" name="updatePassword" id="validForm">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="mb-4 mt-5">Supprimer le compte</h2>
                                        </div>
                                        <!-- DELETE ACCOUNT -->
                                        <div class="col-12">
                                            <p>En supprimant mon compte, je le supprime définitivement.</p>
                                        </div>
                                        <div class="btnParameter col-12 mt-2">
                                            <a class="delete" data-bs-toggle="modal" data-bs-target="#deleteUsers" data-idUsers="<?= $user->id_users ?>">
                                                Supprimer
                                                <i class="bi bi-trash3-fill mx-2" data-idUsers="<?= $user->id_users ?>"></i>
                                            </a>
                                        </div>
                                        <!-- Button trigger modal -->


                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteUsers" tabindex="-1" aria-labelledby="deleteUserLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="deleteUserLabel">Supprimer mon compte</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Êtes-vous sûr de bien vouloir supprimer votre compte ?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                        <a type="button" class="btn btn-danger" id="deleteLinkUser">Supprimer</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END FORM PARAMETER -->
                        </div>

                        <div class="tab-pane fade" id="gallery-tab-pane" role="tabpanel" aria-labelledby="gallery-tab" tabindex="0">
                            <div class="gallery my-3 px-4 py-5">
                                <div class="container-fluid">
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <form action="" method="POST" enctype="multipart/form-data" name="formPictureGallery">
                                                <div class="text-center">
                                                    <input type="file" class="form-control" id="pictureGalleryUpload" name="pictureGalleryUpload" value="" accept="image/jpeg">
                                                    <small class="form-text error"><?= $errors['pictureGalleryUpload'] ?? '' ?>
                                                    </small>
                                                    <input type="submit" value="Ajouter" class="my-4">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="" alt="" srcset="">
                                        <img src="" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="messages-tab-pane" role="tabpanel" aria-labelledby="messages-tab" tabindex="0">
                        <div class="messages my-5 px-4 py-5">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END TABS -->

    <section class="my-4 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 border-bottom">
                </div>
            </div>
        </div>
    </section>

</main>