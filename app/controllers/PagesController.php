<?php

namespace App\Controllers;

class PagesController{

    public function home()
    {
        

        return view('home', compact('users'));

    }


    public function administrator()
    {
        

        return view('administrator');
        
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