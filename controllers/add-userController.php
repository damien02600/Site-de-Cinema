<?php

$formErrors = [];

if (count($_POST) > 0) {  // Si il y a au moins un champs du tableau POST qui est remplie
    // $user = new users(); // on instancie l'objet user
    $user = new users();


    // Si la variable $_POST['lastName'] existe et n'est pas vide, alors $user = $_POST['lastName']
    if (!empty($_POST['lastname'])) { // Si la variable  'lastName' n'est pas vide 
        if (preg_match($regex['lastname'], $_POST['lastname'])) { // Si la valeur correspond à la regex  

            $user->lastname = $_POST['lastname']; // Attribut le résultat du champ user dans lastName                      
        }  else {
            $formErrors['lastname'] = INVALID_LASTNAME;
        }
    } else {
        $formErrors['lastname'] = EMPTY_LASTNAME;
    } 

    if (!empty($_POST['firstname'])) {
        if (preg_match($regex['firstname'], $_POST['firstname'])) {

            $user->firstname = $_POST['firstname'];
        } else {
            $formErrors['firstname'] = INVALID_FIRSTNAME;
        }
    } else {
        $formErrors['firstName'] = EMPTY_FIRSTNAME;
    }

    if (!empty($_POST['username'])) {
        if (preg_match($regex['username'], $_POST['username'])) {

            $user->username = $_POST['username'];
        } else {
            $formErrors['username'] = INVALID_USERNAME;
        }
    } else {
        $formErrors['username'] = EMPTY_USERNAME;
    }


    if (!empty($_POST['mail'])) {
        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $user->mail = $_POST['mail'];
        } else {
            $formErrors['mail'] = INVALID_MAIL;
        }
    } else {
        $formErrors['mail'] = EMPTY_MAIL;
    }

    if (!empty($_POST['password'])) {
        $user->password = $_POST['password'];
    }



    if (count($formErrors) == 0) {
    $user->addUser();
} 

}