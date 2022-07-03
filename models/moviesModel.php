<?php

// On créer la class users qui herite de la class datbase.
// La class est une représentation de quelque choses.

class movies extends database  // La class dit un users c'est ca.
{
    protected $db = NULL;
    public $id = 0;
    public $title_vo = '';
    public $title_vf = '';
    public $description = '';
    public $releaseDate  = '1970-01-01';
    public $duration = '';
    public $picture = '';
    public $id_mk9h8_genres  = '';
    public $id_mk9h8_language   = '';
    public $id_mk9h8_reference  = '';
    public $id_mk9h8_nationality    = '';
    public $id_mk9h8_directors   = '';

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

    public function addMovies()
    {
        $query = 'INSERT INTO `mk9h8_movies`(`title_vo`, `title_vf`, `description`, `releaseDate`, `duration`, `picture`,`id_mk9h8_genres`,`id_mk9h8_language`, `id_mk9h8_reference`, `id_mk9h8_nationality`, `id_mk9h8_directors`)
        VALUES (:title_vo,:title_vf,:description,:releaseDate,:duration,:picture,:id_mk9h8_genres,:id_mk9h8_language,:id_mk9h8_reference,:id_mk9h8_nationality,:id_mk9h8_directors)';

        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':title_vo', $this->title_vo, PDO::PARAM_STR);
        $queryExecute->bindValue(':title_vf', $this->title_vf, PDO::PARAM_STR);
        $queryExecute->bindValue(':description', $this->description, PDO::PARAM_STR);
        $queryExecute->bindValue('releaseDate', $this->releaseDate, PDO::PARAM_INT);
        $queryExecute->bindValue(':duration', $this->duration, PDO::PARAM_INT);
        $queryExecute->bindValue('picture', $this->picture, PDO::PARAM_STR);
        $queryExecute->bindValue('id_mk9h8_genres', $this->id_mk9h8_genres, PDO::PARAM_INT);
        $queryExecute->bindValue('id_mk9h8_language', $this->id_mk9h8_language, PDO::PARAM_INT);
        $queryExecute->bindValue('id_mk9h8_reference', $this->id_mk9h8_reference, PDO::PARAM_INT);
        $queryExecute->bindValue('id_mk9h8_nationality', $this->id_mk9h8_nationality, PDO::PARAM_INT);
        $queryExecute->bindValue('id_mk9h8_directors', $this->id_mk9h8_directors, PDO::PARAM_INT);
        return $queryExecute->execute();
    }

} 