<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //
    public function first(){
        return "I am learning about the first Laravel Composer";
    }
    // To Print THe $Id
    public function first_id($id){
        return $id;
    }

    //----------PASSIING DATA FROM THE URL FILE USING BLADE FILE
    
}

