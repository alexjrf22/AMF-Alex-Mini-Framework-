<?php

namespace AMF\Model;

abstract class Table
{
       protected $db;
       protected $table;


       public function __construct(\PDO $db) 
    {
        $this->db = $db;
    }
    
    public function fetchAll()
    {
        $query = "SELECT * FROM {$this->table}";
        return $this->db->query($query);
    }
}
