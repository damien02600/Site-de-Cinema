<?php

// $user = new users(); // on instancie l'objet user
$user = new users();

var_dump($_POST);

if (count($_POST) > 0) {  // Si il y a au moins un champs du tableau POST qui est remplie

// Si la variable $_POST['lastName'] existe et n'est pas vide, alors $user = $_POST['lastName']
if (!empty($_POST['lastname'])) {
    $user->lastName = $_POST['lastname'];
    }

    if (!empty($_POST['firstname'])) {
    $user->firstName = $_POST['firstname'];
    }

    if (!empty($_POST['username'])) {
    $user->username = $_POST['username'];
    }

    if (!empty($_POST['mail'])) {
        $user->mail = $_POST['mail'];
        }

    if (!empty($_POST['password'])) {
    $user->password = $_POST['password'];
}

$user->addUser();

}