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

<div class="container">

<p><?= $movieDetails->title_vo?></p>
<p><?= $movieDetails->titre_vf?></p>
<p><?= $movieDetail->picture?></p>
<p><?= $movieDetail->synopsis?></p>
<p><?= $movieDetail->id_mk9h8_reference?></p>
<p><?= $movieDetail->releaseDate?></p>
<p><?= $movieDetail->duration?></p>
<p><?= $movieDetail->id_mk9h8_genres?></p>
<p><?= $movieDetail->id_mk9h8_language?></p>
<p><?= $movieDetail->id_mk9h8_nationality?></p>
<p><?= $movieDetail->id_mk9h8_directors?></p>


</div>


<?php require_once 'includes/footer.php'; ?>