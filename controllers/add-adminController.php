<?php

$formErrors = [];


if (count($_POST) > 0) {  // Si il y a au moins un champs du tableau POST qui est remplie
    // $user = new users(); // on instancie l'objet user
    $admin = new admins();

    if (!empty($_POST['username'])) { // Si la variable  'username' n'est pas vide 
        if (preg_match($regex['username'], $_POST['username'])) { // Si la valeur correspond à la regex  
            $admin->username = $_POST['username'];  // Attribut le résultat du champ user dans username
        } else {
            $formErrors['username'] = EMPTY_USERNAME; // Sinon 'Le pseudo est obligatoire'
        }
    } else {
        $formErrors['username'] = 'Le nom d\'utilisateur doit faire entre 3 et 50 caractère et ne peut contenir que des chiffres et des lettres.';
    }


        if (!isset($formErrors['password']) && !isset($formErrors['confirmPassword'])) {
            if ($_POST['password'] == $_POST['confirmPassword']) {
                $admin->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            } else {
                $formErrors['password'] = $formErrors['confirmPassword'] = 'Les mots de passe ne sont pas identiques.';
            }          
        }



        if (count($formErrors) == 0) {
            $admin->addAdmin();
            } 

}