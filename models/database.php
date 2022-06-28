<?php

class database
{

    protected $db = NULL;  /* Variable protéger grace à la propriété "protected" est on lui donne la valeur "NULL" 
                              c'est à dire lui donner une variable sans valeur. */

    public function __construct()
    {

        /*
j'ajoute une structure de test de type try / catch 
qui va me permettre de récupérer le code d'erreur si la connexion dvait échouer.
*/
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=projettpmajestic;charset=utf8', 'root', '');
            return $this->db;
        } catch (Exception $error) {
            die($error->getMessage());
            exit();
        }
    }
}
