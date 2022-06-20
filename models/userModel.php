<?php

// On créer la class users qui herite de la class datbase.
// La class est une représentation de quelque choses.

class users extends database  // La class dit un users c'est ca.
{
    protected $db = NULL;
    public $id = 0;
    public $lastname = '';
    public $firstname = '';
    public $username = '';
    public $mail = '';

  /**
     * __construct() =  methode magique
     * il se declenche au moment ou on intancie l'objet
     * elle permet de se connecter a la base de donné en appelant la methode construct 
     * du parent, donc database qui elle contient l'objet PDO et la phrase de connexion 
   */

    public function __construct()
    {
      $this->db = parent::__construct();
    }

  /**
     * addUser() permet d'ajouter un utilisateur dans la base de données
     * elle est en visibilité public pour qu'on puisse 
     * l'appeler de l'exterieur de la class
     */

     // déclaration de notre méthode
     public function addUser()
     {
         $query = 'INSERT INTO `mk9h8_users`(`lastname`, `firstname`, `username`, `mail`, `password`,`id_mk9h8_roles`)
         VALUES (:lastname,:firstname,:username,:mail,:password,2)';

         $queryExecute = $this->db->prepare($query);
         $queryExecute->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
         $queryExecute->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
         $queryExecute->bindValue(':username', $this->username, PDO::PARAM_STR);
         $queryExecute->bindValue('mail', $this->mail, PDO::PARAM_STR);
         $queryExecute->bindValue('password', $this->password, PDO::PARAM_STR);
         return $queryExecute->execute();
     }


         // On vérifie si le pseudo existe 
  public function checkIfUserExists()
  { // on donne un id a la requete, puis la requete compte le nombre de ligne qu'a cette id 
    // Nous allons compter les id de la table 7k4fs_users qui ont l'username identiques à lq saisie récupérer dans nos inputs
    // permet de connaitre le nombre d’enregistrement sur la colonne username
    // Le AS permet de renommer une colonne pour avoir un nom facilement identifiable 
    $query = 'SELECT COUNT(username) AS count  
         FROM mk9h8_users
         WHERE username = :username';  // Si la requete renvoie 1 alors il existe si il renvoie 0 il n'existe pas.

    // Préparation de la requéte 
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':username', $this->username, PDO::PARAM_STR);
    $queryExecute->execute();
    $queryResult = $queryExecute->fetch(PDO::FETCH_OBJ);
    return $queryResult->count;
  }


    // Permet de hasher le mot de passe de l'utilisateur
    public function getHashByPassword()
    {
      $query = 'SELECT password 
          FROM mk9h8_users
          WHERE username = :username';
      $queryExecute = $this->db->prepare($query);
      $queryExecute->bindValue(':username', $this->username, PDO::PARAM_STR);
      $queryExecute->execute();
      return $queryExecute->fetch(PDO::FETCH_OBJ);
    }
    
} 