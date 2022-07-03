<?php


$movie = new movies();
$genre = new genre();
$language = new language();
$reference = new reference();
$nationality = new nationality();
$directors = new directors();

$genreList = $genre->getGenreList();
$languageList = $language->getLanguageList();
$referenceList = $reference->getReferenceList();
$nationalityList = $nationality->getNationalityList();
$directorsList = $directors->getDirectorsList();

$formErrors = [];


if (count($_POST) > 0) {  // Si il y a au moins un champs du tableau POST qui est remplie
    // $user = new users(); // on instancie l'objet user

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

    if (!empty($_POST['language'])) {

        $movie->id_mk9h8_language  = $_POST['language'];
    } 

    if (!empty($_POST['reference'])) {

        $movie->id_mk9h8_reference  = $_POST['reference'];
    } 

    if (!empty($_POST['nationality'])) {

        $movie->id_mk9h8_nationality = $_POST['nationality'];
    } 

    if (!empty($_POST['directors'])) {

        $movie->id_mk9h8_directors = $_POST['directors'];
    } 

    $movie->addMovies();
}
