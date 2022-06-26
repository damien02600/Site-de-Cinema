<?php

// On créer la class users qui herite de la class datbase.
// La class est une représentation de quelque choses.

class admins extends database  // La class dit un users c'est ca.
{
    protected $db = NULL;
    public $id = 0;
    public $username = '';

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
     public function addAdmin()
     {
         $query = 'INSERT INTO `mk9h8_admin`(`username`,`password`)
         VALUES (:username,:password)';

         $queryExecute = $this->db->prepare($query);
         $queryExecute->bindValue(':username', $this->username, PDO::PARAM_STR);
         $queryExecute->bindValue('password', $this->password, PDO::PARAM_STR);
         return $queryExecute->execute();
     }



} 