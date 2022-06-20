<?php

// $user = new users(); // on instancie l'objet user
   $user = new users();
   
// Supprimer le profil

   if (!empty($_POST)) { 
    

      $user->id = $_POST['recipient-name'];
      } 


// Affichage des infos du profil

   $user->id = $_SESSION['id']; // Je récupére l'id de l'url 
   $profilDetail = $user->getUserById(); // Je lance la méthode qui affiche les infos de l'id correspondant
