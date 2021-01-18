<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder {

    protected $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;

    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $users = $statement->fetchAll(PDO::FETCH_CLASS);
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
            
        } catch (\Exception $e) {
            
        }
    }

    public function updateUserEmail($parameters)
    {   
        $username = $parameters['username'];
        $useremail = $parameters['useremail'];

        try {
            $statement = $this->pdo->prepare('update users set useremail = ? where username = ?');
            
            $statement->execute([$useremail, $username]);
            
        } catch (\Exception $e) {
            
        }
    }

    public function userCheck($query){
    try {

        $username = $_REQUEST['username'];
               

        $statement = $this->pdo->prepare("select * from users where username = ?");

        

        $statement->execute([$username]);


    } catch (\Exception $e) {
        var_dump($e->getMessage());
    }

    // return $stmt;
    }



}