<?php

namespace App\Controllers;

use App\Core\App;

class LoginController
{
    // public function login() {
    // var_dump($_POST);
    // }


    public function login() {
        if (isset($_REQUEST['username']) && isset($_REQUEST['password']))
        {
            $sql = $_REQUEST;
            
            $res = App::get('database')->userCheck($sql);
            // var_dump($sql);
            
            var_dump($res);

        }

    }




};