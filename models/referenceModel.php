<?php

class reference extends database 
{
    protected $db = NULL;
    public $id = 0;
    public $name = '';

public function __construct()
{
    $this->db = parent::__construct();
}
  
    public function getReferenceList()
    {
        $query = 'SELECT id, name 
        FROM mk9h8_reference';

     $queryExecute = $this->db->query($query);
     $queryResult = $queryExecute->fetchAll(PDO::FETCH_OBJ);
     return $queryResult;
    }  
}