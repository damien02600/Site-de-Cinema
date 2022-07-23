<?php

$movie = new movies();
$genre = new genre();
$language = new language();
$reference = new reference();
$nationality = new nationality();
$directors = new directors();

$movie->id = $_GET['id'];
$movieDetails = $movie->getMoviesDetails();


