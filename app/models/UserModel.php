<?php

// This is the PHP class created in this example to handle the login process. The getMemberById method request DataSource to fetch the member results.

namespace App\Models;

use App\Core\App;

class User
{

    // private $dbConn;

    // private $ds;

    // function __construct()
    // {
    //     require_once "DataSource.php";
    //     $this->ds = new DataSource();
    // }

    // function getUserById($userId)
    // {
    //     $query = "select * FROM registered_users WHERE id = ?";
    //     $paramType = "i";
    //     $paramArray = array($userId);
    //     $memberResult = $this->ds->select($query, $paramType, $paramArray);
        
    //     return $memberResult;
    // }
    
    // public function processLogin($username, $password) {
    //     $passwordHash = md5($password);
    //     $query = "select * FROM users WHERE username = ? AND password = ?";
    //     $paramType = "ss";
    //     $paramArray = array($username, $passwordHash);
    //     $memberResult = $this->ds->select($query, $paramType, $paramArray);
    //     if(!empty($memberResult)) {
    //         $_SESSION["userId"] = $memberResult[0]["id"];
    //         return true;
    //     }
    // }
}