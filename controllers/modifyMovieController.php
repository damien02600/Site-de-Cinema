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


    if (!empty($_POST['title_vo'])) {

        $movie->title_vo = $_POST['title_vo'];
    }

    if (!empty($_POST['title_vf'])) {

        $movie->title_vf = $_POST['title_vf'];
    } else {
        $formErrors['title_vf'] = EMPTY_TITLEVF;
    }

    if (!empty($_POST['synopsis'])) {

        $movie->synopsis = $_POST['synopsis'];
    } else {
        $formErrors['synopsis'] = EMPTY_SYNOPSIS;
    }

    if (!empty($_POST['releaseDate'])) {
        $movie->releaseDate = $_POST['releaseDate'];
    } else {
        $formErrors['releaseDate'] = EMPTY_RELEASEDATE;
    }

    if (!empty($_POST['duration'])) {
        $movie->duration = $_POST['duration'];
    }  else {
        $formErrors['duration'] = EMPTY_DURATION;
    }

    /**
     * Le tableau super global $_FILES se remplit dès que l'on envoie un fichier. Il crée alors une entrée ['nomDuFichier'] qui devient elle-même un tableau.
     * Ce nouveau tableau ($_FILES['nomDuFichier']) contient des informations très utiles comme le nom du fichier, sa taille et s'il y a eu une erreur lors de l'upload
     * Conseil : Pensez au var_dump, il permet de visualiser une variable ou un tableau
     */

    if ($_FILES['upload_file']['error'] == 0) {
        //La fonction pathinfo renvoie un array contenant l'extension du fichier dans posterExtension
        $pictureExtension = strtolower(pathinfo($_FILES['upload_file']['name'])['extension']);
        $authorizedExtensions = ['png', 'jpeg', 'jpg', 'gif'];
        //On compare l'extension récupérée plus haut à un tableau d'extensions autorisées avec la fonction in_array
        if (in_array($pictureExtension, $authorizedExtensions)) {
            //Si tout est bon, on accepte le fichier en appelant la fonction move_uploaded_file
            //Prend en paramètre le nom temporaire du fichier + le chemin du fichier définitif qui correspond au nom d'origine du fichier
            if (move_uploaded_file($_FILES['upload_file']['tmp_name'], 'assets/uploads/films/' . $_FILES['upload_file']['name'])) {
                //Lecture et écriture pour le propriétaire, lecture pour les autres
                chmod('assets/uploads/films/' . $_FILES['upload_file']['name'], 0644);
                $movie->picture = 'assets/uploads/films/' . $_FILES['upload_file']['name'];
            } else {
                $formErrors['upload_file'] = 'Une erreur est survenue lors de l\'envoi.';
            }
        } else {
            $formErrors['upload_file'] = INVALID_PICTURE;
        }
    } else {
        $formErrors['upload_file'] = EMPTY_PICTURE;
    }

    if (!empty($_POST['genre'])) {

        $movie->id_mk9h8_genres  = $_POST['genre'];
    }  else {
        $formErrors['genre'] = EMPTY_GENRE;
    }

    if (!empty($_POST['language'])) {

        $movie->id_mk9h8_language  = $_POST['language'];
    }   else {
        $formErrors['language'] = EMPTY_LANGUAGE;
    }

    if (!empty($_POST['reference'])) {

        $movie->id_mk9h8_reference  = $_POST['reference'];
    }  else {
        $formErrors['reference'] = EMPTY_REFERENCE;
    }

    if (!empty($_POST['nationality'])) {

        $movie->id_mk9h8_nationality = $_POST['nationality'];
    }   else {
        $formErrors['nationality'] = EMPTY_NATIONALITY;
    }

    if (!empty($_POST['directors'])) {

        $movie->id_mk9h8_directors = $_POST['directors'];
    }    else {
        $formErrors['directors'] = EMPTY_DIRECTORS;
    }

    if (count($formErrors) == 0) {
        $movie->addMovies();
    }

    if (!empty($_GET['id'])) { //  si l'identifiant n'est pas vide (ex : index.php?id=12) alors l'action est effectuée
        $movie->id = $_GET['id']; // Je vais chercher l'id de l'utilisateur 
        $movies = $movie->modifyMovie(); // On lance la méthode modifyUser
        header('Location: home.php'); // Puis si la modification à réussis, on change de page
         exit;
    } 
}


$movie->id = $_GET['id']; 
if (!empty($_GET['id'])) {  //  si l'identifiant n'est pas vide (ex : index.php?id=12) alors l'action est effectuée
    $movie->id = $_GET['id']; // affiche les informations de l'utilisateur dans le formulaire
    $movieDetail = $movie->getMoviesDetails(); // Permet d'afficher les données de l'utilisateur
}
