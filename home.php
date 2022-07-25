<?php
session_start();
require_once 'models/database.php';
require_once 'models/moviesModel.php';
require_once 'models/genreModel.php';
require_once  'controllers/moviesListController.php';
require_once 'includes/header.php';
?>
<div class="container bg-white pt-2 shadow">
        <div class="container">
                <div class="row">
                        <div class="col-lg-12">
                                <div class="row">
                                        <div class="col-lg-12">
                                                <h1 class="fw-bold">A l'affiche</h1>
                                        </div>
                                        <?php foreach ($moviesList as $movieDetails) { ?>
                                                <div class="col-sm-6 col-lg-3">
                                                        <div class="card">
                                                                <div class="card-body text-center shadow border-radius-lg p-3 contenant">
                                                                        <a href="detailMovie.php?id=<?= $movieDetails->idForMovie ?>">
                                                                                <img class="w-100 border-radius-md pb-3" src="<?= $movieDetails->picture ?>">
                                                                                <span class="badge text-bg-warning genre fw-bold"><?= $movieDetails->genreName ?></span>
                                                                        </a>
                                                                        <button type="button" class="btn btn-danger fw-bold">Réservation</button>
                                                                </div>
                                                        </div>
                                                </div>
                                        <?php } ?>
                                </div>
                        </div>
                </div>
        </div>
</div>



<!-- <?php require_once 'includes/footer.php'; ?> -->