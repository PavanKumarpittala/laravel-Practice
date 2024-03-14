<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function LogIn(Request $request)
    {
        $data = $request->input('name');
        $request->session()->put('name',$data);
        echo session('name');

    }
}
