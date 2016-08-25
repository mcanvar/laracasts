<?php

return [
  'database' => [
    'connection' => 'mysql:host=localhost',
    'dbname' => 'laracasts_todos',
    'username' => 'root',
    'password' => '',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
];
