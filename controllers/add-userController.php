<?php

$formErrors = [];


$gender = [
    '1' => 'Homme',
    '2' => 'Femme', 
];


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
        $formErrors['firstname'] = EMPTY_FIRSTNAME;
    }

    if (!empty($_POST['gender'])) {
        if ($_POST['gender'] == 1 || $_POST['gender'] == 2)  {
            $user->gender = $_POST['gender'];  
        } else {
            $formErrors['gender'] = 'Vous devez sélectionner un sexe';
        }    
    } else {
        $formErrors['gender'] = 'Vous devez sélectionner un sexe';
    }

    if (!empty($_POST['username'])) { // Si la variable  'username' n'est pas vide 
        if (preg_match($regex['username'], $_POST['username'])) { // Si la valeur correspond à la regex  
            $user->username = $_POST['username'];  // Attribut le résultat du champ user dans username
            if ($user->checkIfUserExists() > 0) {  // Je vérifie si le pseudo existe déja 
                $formErrors['username'] = INVALID_USERNAME; // Si erreur 'Le pseudo n\'est pas correcte'
            }
        } else {
            $formErrors['username'] = EMPTY_USERNAME; // Sinon 'Le pseudo est obligatoire'
        }
    } else {
        $formErrors['username'] = 'Le nom d\'utilisateur doit faire entre 3 et 50 caractère et ne peut contenir que des chiffres et des lettres.';
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


    // isset détermine si une variable est déclarée et est différente de null
    if (!isset($_POST['password']) || empty($_POST['password'])) {
        $formErrors['password'] = 'Le mot de passe est obligatoire';
    }

    if (!isset($_POST['confirmPassword']) || empty($_POST['confirmPassword'])) {
        $formErrors['confirmPassword'] = 'Le mot de passe est obligatoire';
    }


    if (!isset($formErrors['password']) && !isset($formErrors['confirmPassword'])) {  // isset détermine si une variable est déclarée et est différente de null
        if ($_POST['password'] == $_POST['confirmPassword']) {
            $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        } else {
            $formErrors['password'] = $formErrors['confirmPassword'] = 'Les mots de passe ne sont pas identiques.';
        }
    }



    if (count($formErrors) == 0) {
    $user->addUser();
    header('location: login.php');
    exit;
} 

}