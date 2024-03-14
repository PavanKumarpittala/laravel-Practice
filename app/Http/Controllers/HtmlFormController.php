<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlFormController extends Controller
{
    //
    public function saveData(Request $request)
    {

        //Validation Processs
        $request->validate([
            'name' => 'required',
            'mobile' => 'required | max:10',
            'password' => 'required | min:5'
        ]);

        echo " The HTML form IS Submitted";
        return $request->input();

    }
}
