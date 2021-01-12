<?php

namespace App\Controllers;

use App\Core\App;

class UserController{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('home', compact('users'));
    }


    public function register()
    {
        App::get('database')->insert('users', [
            'username' => $_POST['username'],
            'useremail' => $_POST['useremail']
        ]);

        return redirect('administrator');
    }

    public function updateUserEmail()
    {
        App::get('database')->updateUserEmail([
            'useremail' => $_POST['useremail'], 
            'username' => $_POST['username']
            // ,
            // $_POST['useremail'],
            // $_POST['username']
        ]);

        return redirect('administrator');

    }

}
