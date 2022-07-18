<?php


class movies extends database
{
  protected $db = NULL;
  public $id = 0;
  public $title_vo = '';
  public $title_vf = '';
  public $synopsis = '';
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
    $query = 'INSERT INTO `mk9h8_movies`(`title_vo`, `title_vf`, `synopsis`, `releaseDate`, `duration`, `picture`,`id_mk9h8_genres`,`id_mk9h8_language`, `id_mk9h8_reference`, `id_mk9h8_nationality`, `id_mk9h8_directors`)
        VALUES (:title_vo,:title_vf,:synopsis,:releaseDate,:duration,:picture,:id_mk9h8_genres,:id_mk9h8_language,:id_mk9h8_reference,:id_mk9h8_nationality,:id_mk9h8_directors)';

    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':title_vo', $this->title_vo, PDO::PARAM_STR);
    $queryExecute->bindValue(':title_vf', $this->title_vf, PDO::PARAM_STR);
    $queryExecute->bindValue(':synopsis', $this->synopsis, PDO::PARAM_STR);
    $queryExecute->bindValue(':releaseDate', $this->releaseDate, PDO::PARAM_STR);
    $queryExecute->bindValue(':duration', $this->duration, PDO::PARAM_STR);
    $queryExecute->bindValue(':picture', $this->picture, PDO::PARAM_STR);
    $queryExecute->bindValue(':id_mk9h8_genres', $this->id_mk9h8_genres, PDO::PARAM_STR);
    $queryExecute->bindValue(':id_mk9h8_language', $this->id_mk9h8_language, PDO::PARAM_STR);
    $queryExecute->bindValue(':id_mk9h8_reference', $this->id_mk9h8_reference, PDO::PARAM_STR);
    $queryExecute->bindValue(':id_mk9h8_nationality', $this->id_mk9h8_nationality, PDO::PARAM_STR);
    $queryExecute->bindValue(':id_mk9h8_directors', $this->id_mk9h8_directors, PDO::PARAM_STR);
    return $queryExecute->execute();
  }

// Cette requete permet d'afficher le titre et la photo du film dans la page d'accueil
  public function getMoviesList()
  {
    $query = 'SELECT title_vf, picture 
  FROM mk9h8_movies';

    $queryExecute = $this->db->query($query);
    $queryResult = $queryExecute->fetchAll(PDO::FETCH_OBJ);
    return $queryResult;
  }
}
