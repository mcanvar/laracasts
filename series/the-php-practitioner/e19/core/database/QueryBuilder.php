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

   public function insert($table, $values = [])
   {
     foreach ($values as $field => $v)
         $ins[] = ':' . $field;

     $ins = implode(',', $ins);
     $fields = implode(',', array_keys($values));

     $statement = $this->pdo->prepare("INSERT INTO $table ($fields) VALUES ($ins)");

     foreach($values as $f => $v)
     {
         $statement->bindValue(':' . $f, $v);
     }


     return $statement->execute();
   }
 }
