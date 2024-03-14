<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    //
    public function UseOfBlade()
    {
        $data = ['pavan', 'kumar', 'bp', 'Rmesh'];
        return view('practice_blade', ['users' => $data]);
    }
};
