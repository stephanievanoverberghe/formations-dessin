<main>

    <!-- START BANNER -->

    <section class="mb-4 text-center" id="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <div class="banner-text banner-text-mobile">
                        <h1>Module 3</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END BANNER -->

    <!-- START BREADCRUMB -->

    <section id="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/controllers/homeCtrl.php">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="/controllers/formation/formationCtrl.php">Formations</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $trainings[0]->modules_title ?></li>
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
                    <h2><?= $trainings[0]->modules_title ?></h2>
                </div>
                <div class="col-12 mb-5">
                    <p><?= $trainings[0]->modules_content ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- END INTRODUCTION -->

    <!-- START MODUL - VIDEOS -->

    <section class="my-4 text-center" id="videos">

        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- ACCORDION -->

                    <div class="accordion" id="accordion">
                        <?php $accordionId = 4;
                        foreach ($trainings as $training) { ?>
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $accordionId ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?= $training->submodules_title ?>
                                    </button>
                                </h2>
                                <div id="collapse<?= $accordionId ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <!-- ACCORDION INTERIOR -->
                                        <p class="text-start mb-5"><?= $training->submodules_content ?></p>
                                        <?php
                                        $videos = Video::getAllVideos($training->id_sub_modules);
                                        foreach ($videos as $video) {

                                        ?>
                                            <video src="/public/uploads/videos/video_<?= $video->id_videos ?>.mp4" controls></video>
                                            <div class="row">
                                                <div class="col-12 text-center mt-3 mb-5">
                                                    <!-- <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheck">
                                                    </div> -->
                                                </div>
                                            </div>
                                        <?php } ?>

                                        <p>Tout ne se passe pas comme prévu et tu as besoin d'un petit coup de pouce,</p>
                                        <p>Poses tes questions directement sur le forum.</p>
                                        <div class="col-12 text-center mt-4 mb-3">
                                            <a href="/controllers/forum/publics/forumCtrl.php" class="btn">Forum</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $accordionId++;
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END MODUL - VIDEOS -->

    <!-- START NEXT MODULE ACCESS  -->

    <section class="my-4 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12col-lg-6 text-md-start mt-5">
                    <a href="/controllers/formation/module2Ctrl.php?id_trainings=<?= $id_trainings ?>&id_modules=<?= $id_modules - 1 ?>"><i class="bi bi-arrow-left-circle-fill me-4"></i>Module 2 - Observer en 2d</a>
                </div>
                <div class="col-12col-lg-6 text-md-end mt-5">
                    <a href="/controllers/formation/module4Ctrl.php?id_trainings=<?= $id_trainings ?>&id_modules=<?= $id_modules ?>">Module 4 - Ombres et lumières<i class="bi bi-arrow-right-circle-fill ms-4"></i></a>
                </div>
            </div>
            <div class="col-12 border-bottom my-5">

            </div>
        </div>
    </section>

    <!-- END NEXT MODULE ACCESS -->

</main>