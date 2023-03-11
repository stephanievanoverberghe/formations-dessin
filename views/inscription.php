<?php if(isset($errors['global'])) {?>
    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global'])?>
    </div>
<?php }
// Si le patient existe (update, ou si ajout d'un nouveau patient)
if ($user){
    ?>
<!-- START REGISTER -->
<main>

    <div class="offset-1 col-10 border-bottom my-3 mb-5">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Inscris-toi et commences ta formation</h1>
            </div>
        </div>
    </div>

    <!-- START FORM -->
    <form 
        method="post" 
        role="form" 
        id="formUser" 
        class="formUser">
        <div class="container">
            <fieldset>
                <!-- LASTNAME -->
                <div class="row">
                    <div class="col-lg-6 mt-5 mb-3">
                        <label for="lastname" class="form-label">Nom
                            <span class="orange"> *</span>
                        </label>
                        <input 
                            type="text" 
                            name="lastname" 
                            class="form-control <?= isset($errors['lastname']) ? 'is-invalid' : '' ?>" 
                            id="lastname" 
                            placeholder="Ex: Dupond" 
                            autocomplete="family-name" 
                            value="<?= $user->lastname ?? $lastname ?? '' ?>" 
                            minlength="2" 
                            maxlength="70" 
                            pattern="<?= REGEXP_NO_NUMBER ?>" 
                            required
                        >
                        <small id="lastnameHelp" class="form-text error"><?= $errors['lastname'] ?? '' ?></small>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="col-lg-6 mt-5 mb-3">
                        <label for="firstname" class="form-label">Prénom</label>
                        <input 
                            type="text" 
                            name="firstname" 
                            class="form-control <?= isset($errors['firstname']) ? 'is-invalid' : '' ?>" 
                            id="firstname" 
                            placeholder="Ex: Sarah" 
                            autocomplete="given-name"
                            value="<?= $user->firstname ?? $firstname ?? '' ?>" 
                            minlength="2" 
                            maxlength="70" 
                            pattern="<?= REGEXP_NO_NUMBER ?>" 
                        >
                        <small id="firstnameHelp" class="form-text error"><?= $errors['firstname'] ?? '' ?></small>
                    </div>
                </div>
                <!-- PSEUDO -->
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="pseudo" class="form-label">Pseudo</label>
                        <input 
                            type="text" 
                            name="pseudo" 
                            class="form-control <?= isset($errors['pseudo']) ? 'is-invalid' : '' ?>" 
                            id="pseudo" 
                            placeholder="Ex: Norel-art"
                            value="<?= $user->pseudo ?? $pseudo ?? '' ?>" 
                            minlenght="2" 
                            maxlength="70"
                            autocomplete="username" 
                        >
                        <small id=pseudoHelp class="form-text error"><?= $errors['pseudo'] ?? '' ?></small>
                    </div>
                    <!-- EMAIL -->
                    <div class="col-lg-6 mb-3">
                        <label 
                            for="email" 
                            class="form-label">Email
                            <span class="orange"> *</span>
                        </label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            placeholder="Ex: sarahdupond@gmail.com" 
                            value="<?= $user->email ?? $email ?? '' ?>" 
                            class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>" 
                            required
                            autocomplete="email"
                        >
                        <small id="emailError" class="form-text error"><?= $errors['email'] ?? '' ?></small>
                    </div>
                </div>
                <!-- BIRTHDATE -->
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="birthdate" class="form-label">Date de naissance</label>
                        <input 
                            type="date" 
                            name="birthdate" 
                            id="birthdate" 
                            value="<?= $user->birthdate ?? $birthdate ?? '' ?>" 
                            title="La date de naissance n'est pas au format attendu" 
                            placeholder="Ex: 13-01-1998" 
                            class="form-control <?= isset($errors['birthdate']) ? 'is-invalid' : '' ?>" 
                            autocomplete="bday" 
                            aria-describedby="birthdateHelp" 
                            min="<?=(date('Y')-120).date('-m-d')?>" 
                            max="<?=date('Y-m-d')?>"
                        >
                        <small id="birthdateHelp" class="form-text error"><?= $errors['birthdate'] ?? '' ?></small>
                    </div>
                    <!-- COUNTRY -->
                    <div class="col-lg-6 mb-3">
                        <label for="country" class="form-label">Pays</label>
                        <select 
                            name="country" 
                            id="country" 
                            autocomplete="country"
                            class="form-control <?= isset($errors['country']) ? 'is-invalid' : '' ?>"
                            aria-describedby="countryHelp">
                            <?php foreach (ARRAY_COUNTRIES as $countryInSelect) {
                                $isSelected = ($countryInSelect == $country) ? 'selected' : '';
                                echo "<option $isSelected>$countryInSelect</option>";
                            } ?>
                        </select>
                        <small id="countryHelp" class="form-text error"><?= $errors['country'] ?? '' ?></small>
                    </div>
                </div>
                <!-- PASSWORD -->
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label 
                            for="password" 
                            class="form-label">Mot de passe
                            <span class="orange"> *</span>
                        </label>
                        <input 
                            type="password" 
                            name="password" 
                            value="<?= htmlentities($password ?? '') ?>" 
                            class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>" 
                            id="password" 
                            placeholder="Votre mot de passe" 
                            required
                            >
                        <small id="passwordHelp" class="form-text error"><?= $errors['password'] ?? '' ?></small>
                    </div>
                    <!-- CONFIRM PASSWORD -->
                    <div class="col-lg-6 mb-3">
                        <label 
                            for="passwordCheck" 
                            class="form-label">Confirmation du mot de passe
                            <span class="orange"> *</span>
                        </label>
                        <input 
                            type="password" 
                            name="passwordCheck" 
                            id="passwordCheck" 
                            value="<?= htmlentities($password ?? '') ?>" 
                            class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>" 
                            placeholder="Vérification du mot de passe" 
                            required
                        >
                        <small id="passwordCheckHelp" class="form-text error"><?= $errors['password'] ?? '' ?></small>
                    </div>
                </div>
                <!-- CHECK FORM LEGAL NOTICE -->
                <?php
                foreach(LEGAL_NOTICE as $key=>$value) {
                ?>
                <div class="offset-lg-2 my-3 form-check">
                    <input 
                        required
                        type="checkbox" 
                        name="legal_notice[]"
                        class="form-check-input" 
                        id="legal_notice<?=$key?>"
                        value="<?=$key?>"
                        <?= (isset($checkLegalNotice) && in_array($key, $checkLegalNotice)) ? 'checked' : '' ?>
                        >
                    <label 
                        class="form-check-label" 
                        for="legal_notice<?=$key?>">
                        J'ai lu et j'accepte les <a href=""><?=$value?></a>
                    </label>
                </div>
                <?php
                }
                ?>
                <small class="form-text error"><?= $errors['legal_notice'] ?? '' ?></small>
                <!-- CREATE ACCOUNT -->
                <div class="connexion col-12 text-center btn mt-3">
                <input type="submit" value="Créer un compte" id="validForm">
                </div>
            </fieldset>
            <div class="col-12 border-bottom my-5">

            </div>
        </div>
    </form>
    
    <!-- END FORM -->
</main>
<!-- END REGISTER -->
<?php } 
?>