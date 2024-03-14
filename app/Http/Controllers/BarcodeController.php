<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    //
    public function barcode(){
        $productcode = rand(1234567890,50);
        return view('barcode',['productcode' => $productcode]);
    }
}
