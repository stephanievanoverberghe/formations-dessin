<main>

    <div class="offset-1 col-10 border-bottom my-3 mb-5">
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1>
                    Connecte-toi à ton compte
                </h1>
                <h2 class="mb-4">ou <a href="/controllers/inscriptionCtrl.php">crée un compte</a></h2>
            </div>
        </div>
    </div>



    <!-- Début formulaire -->

    <form action="" method="post" role="form" id="formConnexion" class="formUser">
        <div class="container">
            <fieldset>

                <!-- Emplacement adresse mail -->
                <div class="row">
                    <div class="offset-md-3 col-md-6 offset-md-3 col-12 mb-3 mt-3">
                        <label for="email" class="form-label">Email<span class="orange"> *</span>
                        </label>
                        <input 
                            type="email" 
                            name="email" 
                            class="form-control <?= isset($error['email']) ? 'errorField' : '' ?>" 
                            id="email" 
                            autocomplete="on" 
                            placeholder="Entre ton adresse mail" 
                            value="<?= htmlentities($email ?? '') ?>" 
                            required
                            >
                        <small id="emailError" class="form-text comments"><?= $error['email'] ?? '' ?></small>
                    </div>

                    <!-- Emplacement du mot de passe -->

                    <div class="offset-md-3 col-md-6 offset-md-3 col-12 mb-3 mt-3">
                        <label for="password" class="form-label">Mot de passe<span class="orange"> *</span>
                        </label>
                        <input 
                            type="password" 
                            name="password" 
                            class="form-control <?= isset($error['password']) ? 'errorField' : '' ?>" 
                            id="password" 
                            placeholder="Entre ton mot de passe" 
                            value="<?= htmlentities($password ?? '') ?>" 
                            required
                        >
                        <small id="passwordHelp" class="form-text comments"><?= $error['password'] ?? '' ?></small>
                    </div>

                    <!-- Bouton Créer un compte -->

                    <div class="connexion col-12 text-center btn mt-3 ">
                        <input type="submit" value="Se connecter" class="" id="validForm">
                    </div>
            </fieldset>
    </form>

    <!-- Fin formulaire -->

    <div class="col-12 border-bottom my-5">

    </div>
    </div>

</main>