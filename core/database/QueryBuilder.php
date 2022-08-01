<?php

class QueryBuilder {
    private $pdo;
    public function __construct ($db) {
        $this->pdo = $db;
    }

    public function getAllData ($table) {
        $statement = $this->pdo->prepare("SELECT * FROM $table"); 
        $result = $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert ($table, $dataArr) {
        $getDataArrayKeys = array_keys($dataArr);
        $cols = implode(',', $getDataArrayKeys);
        $questionMarks = '';
        foreach( $dataArr as $single ) {
            $questionMarks .= '?,';
        }
        $questionMarks = rtrim($questionMarks, ',');
        $sql = "INSERT INTO $table ($cols) VALUES ($questionMarks)";
        $statement = $this->pdo->prepare($sql);
        $getDataArrayValues = array_values($dataArr);
        $statement->execute($getDataArrayValues);

    }

    public function update ($table , $dataArr, $id) {

        $getDataArrayKeys = array_keys($dataArr);
        $cols = '';
        foreach ($dataArr as $key=>$value){
            $cols .= $key . '=?,';
        }
        $cols = rtrim($cols, ',');
        $sql = "UPDATE $table SET $cols WHERE id=$id";
        $statement = $this->pdo->prepare($sql);
        $getDataArrayValues = array_values($dataArr);
        $statement->execute($getDataArrayValues);

    }

    public function delete ($table, $id) {

        $sql = "DELETE FROM $table WHERE id=$id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();

    }
}