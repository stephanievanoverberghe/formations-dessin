<?php if (isset($errors['global'])) { ?>
    <div class="alert alert-warning" role="alert">
        <?= nl2br($errors['global']) ?>
    </div>
<?php }
// Si l'utilisateur existe (update, ou si ajout d'un nouveau utilisateur)
if ($user) {
?>
    <!-- START REGISTER -->
    <main>
        <section id="register">
            <div class="offset-1 col-10 border-bottom my-3 mb-5"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12 col-12 text-center my-5">
                        <h1>Inscris-toi et commences ta formation</h1>
                    </div>

                    <div class="col-12">
                        <form 
                            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" 
                            method="POST" 
                            role="form"
                            id="signUp"
                            >

                            <!-- LASTNAME -->
                            <div class="row">
                                <div class="col-lg-6 mb-5">
                                    <label for="lastname" class="form-label">Nom<span class="orange"> *</span></label>
                                    <input 
                                        type="text" 
                                        name="lastname" 
                                        class="form-control form-control-lg <?= isset($errors['lastname']) ?>" 
                                        id="lastname" 
                                        placeholder="Ex: Duhamel" 
                                        autocomplete="family-name" 
                                        value="<?= $user->lastname ?? $lastname ?? '' ?>" 
                                        minlength="2" 
                                        maxlength="70" 
                                        pattern="<?= REGEXP_NO_NUMBER ?>" 
                                        required
                                        aria-describedby="lastnameHelp"
                                        aria-label=".form-control-lg"
                                    >
                                    <div id="lastnameHelp" class="error"><?= $errors['lastname'] ?? '' ?></div>
                                </div>

                                <!-- FIRSTNAME -->

                                <div class="col-lg-6 mb-5">
                                    <label for="firstname" class="form-label">Prénom</label>
                                    <input 
                                        type="text" 
                                        name="firstname" 
                                        class="form-control form-control-lg <?= isset($errors['firstname']) ?>" 
                                        id="firstname" 
                                        placeholder="Ex: Vincent" 
                                        autocomplete="given-name" 
                                        value="<?= $user->firstname ?? $firstname ?? '' ?>" 
                                        minlength="2" 
                                        maxlength="70" 
                                        pattern="<?= REGEXP_NO_NUMBER ?>"
                                        aria-describedby="firstnameHelp"
                                        aria-label=".form-control-lg"
                                    >
                                    <div id="firstnameHelp" class="error"><?= $errors['firstname'] ?? '' ?></div>
                                </div>

                                <!-- PSEUDO -->

                                <div class="col-lg-6 mb-5">
                                    <label for="pseudo" class="form-label">Pseudo</label>
                                    <input 
                                        type="text" 
                                        name="pseudo" 
                                        class="form-control form-control-lg <?= isset($errors['pseudo']) ?>" 
                                        id="pseudo" 
                                        placeholder="Ex: Norel-art" 
                                        value="<?= $user->pseudo ?? $pseudo ?? '' ?>" 
                                        minlenght="2" 
                                        maxlength="70" 
                                        autocomplete="username"
                                        aria-describedby="pseudolHelp"
                                        aria-label=".form-control-lg"
                                    >
                                    <small id=pseudoHelp class="error"><?= $errors['pseudo'] ?? '' ?></small>
                                </div>

                                <!-- EMAIL -->

                                <div class="col-lg-6 mb-5">
                                    <label for="email" class="form-label">Email<span class="orange"> *</span></label>
                                    <input 
                                        type="email" 
                                        name="email" 
                                        id="email" 
                                        placeholder="Ex: vincent.duhamel@gmail.com" 
                                        value="<?= $user->email ?? $email ?? '' ?>" 
                                        class="form-control form-control-lg <?= isset($errors['email']) ?>" 
                                        required 
                                        autocomplete="email"
                                        aria-describedby="emailHelp"
                                        aria-label=".form-control-lg"
                                    >
                                    <div id="emailHelp" class="error"><?= $errors['email'] ?? '' ?></div>
                                </div>

                                <!-- BIRTHDATE -->

                                <div class="col-lg-6 mb-5">
                                    <label for="birthdate" class="form-label">Date de naissance</label>
                                    <input 
                                        type="date" 
                                        name="birthdate" 
                                        id="birthdate" 
                                        value="<?= $user->birthdate ?? $birthdate ?? '' ?>"
                                        class="form-control form-control-lg <?= isset($errors['birthdate']) ?>" 
                                        autocomplete="bday" 
                                        aria-describedby="birthdateHelp" 
                                        min="<?= (date('Y') - 100) . date('-m-d') ?>" 
                                        max="<?= (date('Y') - 18) . date('-m-d') ?>"
                                        aria-label=".form-control-lg"
                                    >
                                    <div id="birthdateHelp" class="error"><?= $errors['birthdate'] ?? '' ?></div>
                                </div>

                                <!-- COUNTRY -->

                                <div class="col-lg-6 mb-5">
                                    <label for="country" class="form-label mb-2">Pays</label>
                                    <select 
                                        name="country" 
                                        id="country" 
                                        autocomplete="country" 
                                        class="form-control form-select-lg <?= isset($errors['country']) ?>" 
                                        aria-describedby="countryHelp"
                                        aria-label=".form-select-lg"
                                    >
                                    <?php foreach (ARRAY_COUNTRIES as $countryInSelect) {
                                        $isSelected = ($countryInSelect == $country) ? 'selected' : '';
                                        echo "<option $isSelected>$countryInSelect</option>";
                                    } ?>
                                    </select>
                                    <small id="countryHelp" class="error"><?= $errors['country'] ?? '' ?></small>
                                </div>

                                <!-- PASSWORD -->

                                <div class="col-lg-6 mb-5">
                                    <label for="password" class="form-label">Mot de passe<span class="orange"> *</span></label>
                                    <input 
                                        type="password" 
                                        name="password" 
                                        value="<?= $password ?? '' ?>" 
                                        class="form-control form-control-lg <?= isset($errors['password']) ?>" 
                                        id="password" 
                                        placeholder="Saisissez votre mot de passe" 
                                        aria-label=".form-control-lg"
                                        aria-describedby="passwordHelp"
                                        required
                                    >
                                    <div id="passwordHelp" class="errorPasswords"><?= $errors['password'] ?? '' ?></div>
                                </div>

                                <!-- CONFIRM PASSWORD -->

                                <div class="col-lg-6 mb-5">
                                    <label for="passwordCheck" class="form-label">Confirmation du mot de passe<span class="orange"> *</span></label>
                                    <input 
                                        type="password" 
                                        name="passwordCheck" 
                                        id="passwordCheck" 
                                        value="<?= $password ?? '' ?>" 
                                        class="form-control form-control-lg <?= isset($errors['password'])  ?>" 
                                        placeholder="Vérification du mot de passe"  
                                        aria-label=".form-control-lg"
                                        aria-describedby="passwordCheckHelp"
                                        required
                                    >
                                    <div id="passwordCheckHelp" class="errorPasswords"><?= $errors['password'] ?? '' ?></div>
                                </div>

                                <!-- CHECK FORM LEGAL NOTICE -->
                                <div class="col-12 mb-5">
                                    <?php
                                    foreach (LEGAL_NOTICE as $key => $value) {
                                    ?>
                                        <div class="form-check">
                                            <input 
                                                required 
                                                type="checkbox" 
                                                name="legal_notice[]" 
                                                class="form-check-input" 
                                                id="legal_notice<?= $key ?>" 
                                                value="<?= $key ?>" 
                                                <?= (isset($checkLegalNotice) && in_array($key, $checkLegalNotice)) ? 'checked' : '' ?>
                                            >
                                            <label class="form-check-label ms-3" for="legal_notice<?= $key ?>">
                                                J'ai lu et j'accepte les <a href=""><?= $value ?></a>
                                            </label>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="error"><?= $errors['legal_notice'] ?? '' ?></div>
                                </div>

                                <!-- CREATE ACCOUNT -->

                                <div class="col-12 mt-5 mb-5 text-center">
                                    <button type="submit" class="btn" id="signUp">Créer un compte</button>
                                </div>
                            </div>
                            <div class="col-12 border-bottom my-5"></div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- END REGISTER -->
<?php }
?>