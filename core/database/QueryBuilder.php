<?php

class QueryBuilder {
    private $db;
    public function __construct ($db) {
        $this->db = $db;
    }

    public function getAllData ($table) {
        $statement = $this->db->prepare("SELECT * FROM $table"); 
        $result = $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}