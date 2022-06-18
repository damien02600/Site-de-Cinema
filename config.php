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


$regex = [
    'lastname' => '/^[a-zA-Z]{3,50}$/',
    'firstname' => '/^[a-zA-Z]{3,50}$/',
    'username' => '/^[a-zA-Z0-9]{3,50}$/',
]; 