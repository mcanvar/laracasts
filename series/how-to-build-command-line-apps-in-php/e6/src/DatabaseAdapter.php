<?php
/**
 * Created by PhpStorm.
 * User: mevlut
 * Date: 22.08.2016
 * Time: 02:01
 */

namespace Acme;

use PDO;


class DatabaseAdapter
{
    protected $connection;

    /**
     * DatabaseAdapter constructor.
     * @param $connection
     */
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function fetchAll($tableName)
    {
        return $this->connection->query('SELECT * FROM ' . $tableName)->fetchAll();
    }

    public function query($sql, $parameters)
    {
        return $this->connection->prepare($sql)->execute($parameters);
    }


}