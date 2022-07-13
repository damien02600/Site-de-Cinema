<?php

define('EMPTY_LASTNAME', 'Votre nom est obligatoire');
define('INVALID_LASTNAME', 'Votre nom est invalide.');
define('INSTRUCTIONS_LASTNAME', 'Le nom ne doit contenir que des lettres (a - z), des espaces, des tirets ou des apostrophes.');

define('EMPTY_FIRSTNAME', 'Votre prénom est obligatoire');
define('INVALID_FIRSTNAME', 'Votre prénom est invalide.');
define('INSTRUCTIONS_FIRSTNAME', 'Le prénom ne doit contenir que des lettres (a - z), des espaces, des tirets ou des apostrophes.');

define('EMPTY_USERNAME', 'Votre pseudo est obligatoire');
define('INVALID_USERNAME', 'Votre pseudo est invalide ou existe déja.');
define('INSTRUCTIONS_USERNAME', 'Le pseudo peut contenir des lettres (a - z) et des chiffres, et doit faire entre 3 et 50 caractères.');

define('EMPTY_MAIL', 'L\'email  est obligatoire');
define('INVALID_MAIL', 'L\'email  n\'est pas correcte');

// ADD MOVIES

define('EMPTY_TITLEVF', 'Le titre du film est obligatoire');

define('EMPTY_SYNOPSIS', 'Le synopsis du film est obligatoire');

define('EMPTY_RELEASEDATE', 'La date de sortie du film est obligatoire');

define('EMPTY_DURATION', 'La durée du film est obligatoire');

define('EMPTY_PICTURE', 'L\'affiche est obligatoire.');
define('INVALID_PICTURE', 'L\'affiche n\'est pas au bon format : png, jpeg, jpg, gif uniquement.');

define('EMPTY_GENRE', 'Le genre du film est obligatoire');

define('EMPTY_LANGUAGE', 'Le langage du film est obligatoire');

define('EMPTY_REFERENCE', 'La reférence du film est obligatoire');

define('EMPTY_NATIONALITY', 'La nationalité du film est obligatoire');

define('EMPTY_DIRECTORS', 'Le réalisateur du film est obligatoire');




$regex = [
    'lastname' => '/^[a-zA-Z]{3,50}$/',
    'firstname' => '/^[a-zA-Z]{3,50}$/',
    'username' => '/^[a-zA-Z0-9]{3,50}$/',
]; 