<main title="Page de connexion">
    <section id="connexion">
        <div class="offset-1 col-10 border-bottom my-3 mb-5"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-12 text-center my-5">
                    <h1>
                        Connecte-toi à ton compte
                    </h1>
                    <h2 class="mb-4">ou <a href="/controllers/sign/signUpCtrl.php">crée un compte</a></h2>
                </div>
                <div class="col-lg-10 col-md-12 col-12">
                    <form action="" method="POST" role="form" autocomplete="off">

                        <!-- EMAIL -->

                        <div class="mb-5">
                            <label for="email" class="form-label">Email<span class="orange"> *</span></label>
                            <input 
                                type="email" 
                                name="email" 
                                class="form-control form-control-lg <?= isset($errors['email']) ? 'is-invalid' : '' ?>" 
                                id="email" 
                                placeholder="Ex: duhamel.vincent@gmail.com"
                                pattern="<?= REGEXP_EMAIL ?>"
                                value="<?= $email ?? '' ?>"
                                aria-describedby="emailHelp"
                                required
                            >
                            <div class="invalid-feedback"><?= $errors['email'] ?? '' ?></div>
                        </div>

                        <!-- PASSWORD -->

                        <div class="mb-5">
                            <label for="password" class="form-label">Mot de passe<span class="orange"> *</span></label>
                            <input 
                                type="password" 
                                name="password" 
                                class="form-control form-control-lg <?= isset($errors['password']) ? 'is-invalid' : '' ?>" 
                                id="password" 
                                placeholder="Saisissez votre mot de passe" 
                                value="<?= $password ?? '' ?>" 
                                required
                                aria-describedby="passwordHelp"
                            >
                            <div class="invalid-feedback"><?= $errors['password'] ?? '' ?><?= $errors['validated_at'] ?? '' ?></div>
                        </div>

                        <div class="mb-5">
                            <div class="form-check">
                                <input 
                                    type="checkbox"
                                    name="rememberMe"
                                    class="form-check-input rememberMe"
                                    id="rememberMe"
                                    value="1"
                                >
                                <label class="form-check-label ms-3" for="rememberMe">Se souvenir de moi</label>
                            </div>
                        </div>

                        <!-- CREATE ACCOUNT -->

                        <div class="col-12 mt-5 mb-5 text-center">
                            <button type="submit" class="btn btnConnexion">
                                Se connecter
                            </button>
                        </div>
                    </form>

                    <div class="col-12 border-bottom my-5">

                    </div>
                </div>
            </div>
    </section>
</main>