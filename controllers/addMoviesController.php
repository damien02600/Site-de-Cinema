<?php

if (count($_POST) > 0) {  // Si il y a au moins un champs du tableau POST qui est remplie
    // $user = new users(); // on instancie l'objet user
    $movie = new movies();

    var_dump($_POST);

    if (!empty($_POST['title_vo'])) {
        $movie->title_vo = $_POST['title_vo']; 
    }

    if (!empty($_POST['title_vf'])) {
        $movie->title_vf = $_POST['title_vf']; 
    }

    if (!empty($_POST['synopsis'])) {
        $movie->synopsis = $_POST['synopsis']; 
    }

    if (!empty($_POST['releaseDate'])) {
        $movie->releaseDate = $_POST['releaseDate']; 
    }

    if (!empty($_POST['duration'])) {
        $movie->duration = $_POST['duration']; 
    }

    if (!empty($_POST['picture'])) {
        $movie->picture = $_POST['picture']; 
    }

    if (!empty($_POST['genre'])) {

        $movie->id_mk9h8_genres  = $_POST['genre'];
    } 
    $movie->addMovies();
}
