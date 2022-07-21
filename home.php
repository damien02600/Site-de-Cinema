<?php
session_start();
require_once 'models/database.php';
require_once 'models/moviesModel.php';
require_once  'controllers/moviesListController.php';
require_once 'includes/header.php';
?>

<div class="container">
        <div class="row">
                 <!-- La boucle foreach permet de faire défilé un tableau
                 La première forme passe en revue le tableau $moviesList
                 À chaque itération, la valeur de l'élément courant est assignée à $movieDetails (qui est la valeur du tableau).
                 Il avance d'un élément (ce qui fait qu'à la prochaine itération, on accédera à l'élément suivant). -->
        <?php foreach ($moviesList as $movieDetails) { ?>
                <div class="col-lg-3 pt-5">
                        <div class="card-postsList card-margin bg-image hover-overlay ripple">
                                <div class="card-header no-border">

                                        <div class="bg-image hover-overlay ripple hover-shadow" data-mdb-ripple-color="light">
                                                <a href="./detailMovie.php"><img src="<?= $movieDetails->picture ?>" class="card-img-top p-3" alt="photo" /></a>
                                        </div>             
                                        <div class="text-center shadow-5">
                                                <!-- Je lui dit que je veux la valeur de la l'atribut title_vf de la class movies -->
                                                <h3><?= $movieDetails->title_vf ?></h3>
                                        </div>
                                </div>
                        </div>
                </div>
                <?php } ?>
        </div>
</div>


<!-- <?php require_once 'includes/footer.php'; ?> -->