<?php

// On créer la class users qui herite de la class datbase.
// La class est une représentation de quelque choses.

class users extends database  // La class dit un users c'est ca.
{
    protected $db = NULL;
    public $id = 0;
    public $lastname = '';
    public $firstname = '';
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
         VALUES (:lastName,:firstName,:username,:mail,:password,2)';

         $queryExecute = $this->db->prepare($query);
         $queryExecute->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
         $queryExecute->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
         $queryExecute->bindValue(':username', $this->username, PDO::PARAM_STR);
         $queryExecute->bindValue('mail', $this->mail, PDO::PARAM_STR);
         $queryExecute->bindValue('password', $this->password, PDO::PARAM_STR);
         return $queryExecute->execute();
     }

} 