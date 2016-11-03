<?php

/**
 * Database Connector Class
 */
class Connector
{
  public static function connect($config)
  {
    try {
      return new PDO(
        $config['connection'] . ';dbname=' . $config['dbname'],
        $config['username'],
        $config['password'],
        $config['options']
      );
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
}
