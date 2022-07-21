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

  // Je créer cette requete pour afficher les détails du film en fonction de l'id de movies
  public function getMoviesDetails()
  {
    $query = 'SELECT movies.id AS idForMovie, title_vo, title_vf, synopsis, releaseDate, duration, picture, genres.name AS genresName, language.name AS languageName, reference.name AS referenceName, nationality.name AS nationalityName, directors.name AS directorsName
    FROM mk9h8_movies AS movies
    INNER JOIN mk9h8_genres AS genres
    ON movies.id_mk9h8_genres = genres.id
    INNER JOIN mk9h8_language AS LANGUAGE
    ON movies.id_mk9h8_language = language.id
    INNER JOIN mk9h8_reference AS REFERENCE
    ON movies.id_mk9h8_reference = reference.id
    INNER JOIN mk9h8_nationality AS nationality
    ON movies.id_mk9h8_nationality = nationality.id
    INNER JOIN mk9h8_directors AS directors
    ON movies.id_mk9h8_directors = directors.id
    WHERE movies.id = :id';

    // lier les valeur au emplacement dans la data base 
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
    $queryExecute->execute();
    $queryResult = $queryExecute->fetch(PDO::FETCH_OBJ);
    return $queryResult;
  }
}
