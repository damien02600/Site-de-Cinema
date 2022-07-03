<?php

class language extends database 
{
    protected $db = NULL;
    public $id = 0;
    public $name = '';

public function __construct()
{
    $this->db = parent::__construct();
}
  
    public function getLanguageList()
    {
        $query = 'SELECT id, name 
        FROM mk9h8_language';

     $queryExecute = $this->db->query($query);
     $queryResult = $queryExecute->fetchAll(PDO::FETCH_OBJ);
     return $queryResult;
    }  
}