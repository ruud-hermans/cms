<?php

namespace App\Controllers;

use App\Core\App;

class PagesController{

    public function home()
    {
        $users = App::get('database')->selectAll('users');

        return view('home', compact('users'));
    }


    public function administrator()
    {
        $users = App::get('database')->selectAll('users');   

        return view('administrator', compact('users'));
    }


    public function upload()
    {
        return view('upload');
                
    }


    public function userpage()
    {
        return view('userpage');
        
    }



}