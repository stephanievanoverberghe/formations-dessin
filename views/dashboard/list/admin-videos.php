<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-11 mt-5">
            <h1 class="mb-5 text-center">Liste des vidéos</h1>
            <div class="formCategory text-end">
                <a href="/controllers/dashboard/add/videosCtrl.php" ><i class="bi bi-plus-square-fill"></i></a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <?php
                    foreach ($videos as $video) {
                        ?>
                    <tr>
                        <td><?= htmlentities($video->title) ?></td>
                        <td><a href="#"><i class="bi bi-eye-fill"></i></a></td>
                    </tr>
                <?php }
                ?>
            </table>
        </div>
    </div>
</div>