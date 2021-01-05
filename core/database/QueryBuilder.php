<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder {

    protected $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;

    }

    public function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $users = $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);

        // return $users = $statement->fetchAll(PDO::FETCH_OBJ);
   
    }

}


