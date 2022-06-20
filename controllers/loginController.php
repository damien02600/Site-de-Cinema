<?php

if (count($_POST) > 0) { 
    $regex['username'] = '/^[a-zA-Z0-9]{3,50}$/';
    $user = new users;


    if (!empty($_POST['username'])) {
        $user->username = $_POST['username']; 
        if ($user->checkIfUserExists() == 0) {
            $formErrors['username'] = $formErrors['password'] =  'L\'identifiant ou le mot de passe est incorrect';
        }
    } else {
        $formErrors['username'] = 'Le nom d\'utilisateur est obligatoire';
    }

    if (!empty($_POST['password'])) {
        if (!isset($formErrors['username'])) {
            $hash = $user->getHashByPassword();  // hash permet de hasher le mot de passe
            if (!password_verify($_POST['password'], $hash->password)) {  // password_verify permet de vérifier si le mot de passe est hasher
                $formErrors['username'] = $formErrors['password'] = 'L\'identifiant ou le mot de passe est incorrect';
            }
        }
    } else {
        $formErrors['password'] =  'Le mot de passe est obligatoire';
    }

    if (count($formErrors) == 0) {  // Si il n'y a pas d'erreur 
        $user->getUserByUsername(); // Je lance la requete getUserByUsername
       // On recoit les infos, on les mets dans des variables de session 
        $_SESSION['id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['id_roles'] = $user->id_roles;
        header('location: home.php');
        exit;
    }
}
