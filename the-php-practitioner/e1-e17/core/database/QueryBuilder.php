<?php

/**
 * Custom Querybuiler
 */
 class QueryBuilder
 {
   protected $pdo;

   function __construct($pdo)
   {
     $this->pdo = $pdo;
   }

   public function getAll($table, $class = stdClass)
   {
     $statement = $this->pdo->prepare("select * from {$table}");
     $statement->execute();
     return $statement->fetchAll(PDO::FETCH_CLASS, $class);
   }
 }
