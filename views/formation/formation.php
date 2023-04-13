<?php if (isset($errors['global'])) { ?>

<div class="alert alert-warning" role="alert">
    <?= nl2br($errors['global']) ?>
</div>

<?php } else { ?>
<main>

    <!-- START BANNER -->
    <section class="mb-4 text-center" id="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <div class="banner-text banner-text-mobile">
                        <h1>Les formations</h1>
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
                            <li class="breadcrumb-item"><a href="/controllers/homeCtrl.php"">Accueil</a></li>
                            <li class=" breadcrumb-item active" aria-current="page">Formations</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB -->

    <!-- START CARD TRAININGS -->
    <section class="my-4 text-center" id="cardTrainings">
        <div class="container">
            <div class="row">
                <?php
                    foreach ($trainings as $training) {
                        $id_modules = Training::getDataByFirstModule($training->id_trainings);
                ?>
                <div class="col-lg-4 col-12 col-md-6 mb-5 d-flex flex-column align-items-center">
                    <div class="card mt-5" style="width: 22rem; height: 100%;">
                        <img src="/public/assets/img/formation1.png" class="card-img-top" alt="Bannière de la formation">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h3 class="card-title mt-3"><?= $training->title?></h3>
                            <p class="card-text mt-3"><?= $training->content ?></p>
                            <p> 
                                <a href="/controllers/formation/introductionCtrl.php?id_trainings=<?= $training->id_trainings ?>&id_modules=<?= $id_modules ?>" class="card-btn">Accéder à la formation</a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php }
                ?>
            </div>
        </div>
    </section>

    <section class="my-4 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 border-bottom my-3 mt-5">
                </div>
            </div>
        </div>
    </section>



</main>
<?php } ?>