<?php
session_start();
require_once 'models/database.php';
require_once 'models/moviesModel.php';
require_once 'models/referenceModel.php';
require_once 'models/genreModel.php';
require_once 'models/languageModel.php';
require_once 'models/nationalityModel.php';
require_once 'models/directorsModel.php';
require_once 'controllers/getMovieDetailController.php';
require_once 'includes/header.php';
?>

<div class="container pt-5">
    <div class="row">
        <div class="col-lg-3 col-sm-12">
            <img src="<?= $movieDetails->picture ?>" alt="">
        </div>
        <div class="col-lg-9 col-sm-12">
            <h1><?= $movieDetails->title_vf ?></h1>
            <h3><?= $movieDetails->title_vo ?></h3>
            <div>
                <p><?= $movieDetails->synopsis ?></p>
                <p><?= $movieDetails->referenceName ?></p>
                <p> Date de sortie : <?= $movieDetails->releaseDate ?></p>
                <p>Durée : <?= $movieDetails->duration ?></p>
                <p>Genre : <?= $movieDetails->genresName ?></p>
                <p>Version disponible : <?= $movieDetails->languageName ?></p>
                <p>Nationalité : <?= $movieDetails->nationalityName ?></p>
                <p>Directeur : <?= $movieDetails->directorsName ?></p>
            </div>
        </div>
        <a href="./modifyMovie.php"><button type="button" class="btn btn-primary">Modifier</button></a>
        <a href="#"><button type="button" class="btn btn-danger">Suppression</button></a>
    </div>
</div>





<?php require_once 'includes/footer.php'; ?>