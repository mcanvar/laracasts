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

   public function getAll($table, $class = NULL)
   {
     $statement = $this->pdo->prepare("select * from {$table}");
     $statement->execute();

     if($class != NULL)
     {
       return $statement->fetchAll(PDO::FETCH_CLASS, $class);
     }

     return $statement->fetchAll(PDO::FETCH_CLASS);
   }

   public function insert($table, $parameters)
   {
     $sql = sprintf(
       'insert into %s (%s) values (%s)',
       $table,
       implode(', ', array_keys($parameters)),
       ':' . implode(', :', array_keys($parameters))
     );

     try {
       $statement = $this->pdo->prepare($sql);
       $statement->execute($parameters);
     } catch (Exception $e) {
       die($e->getMessage());
     }
   }
 }
