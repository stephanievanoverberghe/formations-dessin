<main>
    <section id="connexion">
        <div class="offset-1 col-10 border-bottom my-3 mb-5"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-12 text-center my-5">
                    <h1>
                        Connecte-toi à ton compte
                    </h1>
                    <h2 class="mb-4">ou <a href="/controllers/inscriptionCtrl.php">crée un compte</a></h2>
                </div>
                <div class="col-lg-10 col-md-12 col-12">
                    <form action="" method="POST" role="form">

                        <!-- EMAIL -->

                        <div class="mb-5">
                            <label for="email" class="form-label">Email<span class="orange"> *</span></label>
                            <input 
                                type="email" 
                                name="email" 
                                class="form-control form-control-lg <?= isset($errors['email']) ?>" 
                                id="email" 
                                autocomplete="email" 
                                placeholder="Ex: duhamel.vincent@gmail.com"
                                pattern="<?= REGEXP_EMAIL ?>"
                                value="<?= $email ?? '' ?>"
                                aria-describedby="emailHelp"
                                aria-label=".form-control-lg"
                                required
                            >
                            <div id="emailHelp" class="error"><?= $errors['email'] ?? '' ?></div>
                        </div>

                        <!-- PASSWORD -->

                        <div class="mb-5">
                            <label for="password" class="form-label">Mot de passe<span class="orange"> *</span></label>
                            <input 
                                type="password" 
                                name="password" 
                                class="form-control form-control-lg <?= isset($errors['password']) ?>" 
                                id="password" 
                                placeholder="Saisissez votre mot de passe" 
                                value="<?= $password ?? '' ?>" 
                                required
                                aria-label=".form-control-lg"
                                aria-describedby="passwordHelp"
                            >
                            <div id="passwordHelp" class="error"><?= $errors['password'] ?? '' ?></div>
                        </div>

                        <div class="mb-5">
                            <div class="form-check">
                                <input 
                                    type="checkbox"
                                    name="rememberMe"
                                    class="form-check-input rememberMe"
                                    id="rememberMe"
                                    value=""
                                >
                                <label class="form-check-label ms-3" for="rememberMe">Se souvenir de moi</label>
                            </div>
                        </div>

                        <!-- CREATE ACCOUNT -->

                        <div class="col-12 mt-5 mb-5 text-center">
                            <button type="submit" class="btn btnConnexion">
                                Se connecter
                        </div>
                    </form>

                    <div class="col-12 border-bottom my-5">

                    </div>
                </div>
            </div>
    </section>
</main>