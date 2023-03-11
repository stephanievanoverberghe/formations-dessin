<main>

    <!-- START BANNER -->
    <section class="my-4 text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center banner-image">
                    <img src="/public/assets/img/banniere_alchimiste.png" alt="Logo l'Alchimiste créations" class="banniere">
                    <div class="banner-text">
                        <h1>Conclusion</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->

    <!-- START BREADCRUMB -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/controllers/homeCtrl.php">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="/controllers/formation/formationCtrl.php">Les fondamentaux du dessin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Exercice final</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB -->

    <!-- START INTRODUCTION -->
    <section class="my-4 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 my-5">
                    <h2>Exercice final</h2>
                </div>
                <div class="col-12 mb-5">
                    <p>C'est le moment de mettre tes nouveaux talents à exécution !</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END INTRODUCTION -->

    <!-- START MODUL - VIDEOS -->
    <section class="my-4 text-center">

        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- ACCORDION 1-->
                    <div class="accordion" id="accordion">
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Exercice
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">

                                <!-- ACCORDION INTERIOR -->
                                <div class="accordion-body">
                                    <p class="text-start mb-5">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <video src="/public/assets/video/00-00-introduction.mp4" width="50%" controls></video>
                                    <div class="row">
                                        <div class="col-12 text-center mt-3 mb-5">
                                            <button>Valider</button>
                                        </div>
                                    </div>
                                    <p>Tout ne se passe pas comme prévu et tu as besoin d'un petit coup de pouce,</p>
                                    <p>Poses tes questions directement sur le forum.</p>
                                    <div class="col-12 text-center mt-4 mb-3">
                                        <button>Forum</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ACCORDION 2 -->
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Envoi du dessin
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordion">

                                <!-- ACCORDION INTERIOR -->
                                <div class="accordion-body">
                                    <p class="text-start mb-2">
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting, remaining essentially unchanged.</p>

                                    <!-- SHARE A FILE-->
                                    <div class="finalExercice my-5 px-5 py-5">
                                        <div class="row">
                                            <div class="col-lg-6 text-start mt-3 mb-5">
                                                <input
                                                    name="filePicture"
                                                    id="filePicture"
                                                    type="file" 
                                                    class="form-control"
                                                    accept="image/png, image/jpeg"
                                                >
                                                <small id="filePictureHelp" class="form-text error"><?= $error['filePicture'] ?? '' ?></small>
                                            </div>
                                            <div class="col-lg-6 text-start mt-3 mb-5 px-5">
                                                <p>nomdufichier.jpg</p>
                                            </div>

                                            <!-- TEXTAREA -->
                                            <div class="row">
                                                <div class="col-12 text-start mt-3 mb-5">
                                                    <label for="textarea" class="form-label">Message d'accompagnement</label>
                                                    <textarea 
                                                        class="form-control" 
                                                        name="finalExercice"
                                                        id="finalExercice" 
                                                        rows="10" 
                                                        placeholder="Tu peux écrire les difficulés rencontrées, les méthodes qui t'ont le plus servis, ce que tu as aimé, les axes que tu penses devoir améliorer..."><?= $finalExercice ?? '' ?>
                                                    </textarea>
                                                    <small class="form-text error"><?= $error['finalExercice'] ?? '' ?></small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center mb-5 d-flex flex-column align-items-end">
                                                    <input type="submit" value="Envoyer" class="" id="validForm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- AND MODUL - VIDEOS -->

    <!-- START NEXT MODULE ACCESS  -->

    <section class="my-4 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-md-start mt-5">
                    <a href="/controllers/formation/module6Ctrl.php">Module 6 - Composition</a>
                </div>
            </div>
            <div class="col-12 border-bottom my-5">

            </div>
        </div>
    </section>

    <!-- END NEXT MODULE ACCESS -->

</main>