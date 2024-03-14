<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function create()
    {
        return view('create_product');
    }

    // public function store(Request $request)
    // {
    //     $number = mt_rand(1000000000,9999999999);



    //     while($this->productCodeExists($number)){
    //         $number = mt_rand(1000000000,9999999999);
    //     }

    //     $request['Product_code'] = $number;
    //     Product::create($request->all());
    //     return redirect('product');
    // }

    // public function productCodeExists($number)
    // {
    //         return Product::whereProductCode($number)->exists();
    // }


    public function store(Request $request)
    {
        $number = mt_rand(1000000000, 9999999999);

        while ($this->productCodeExists($number)) {
            $number = mt_rand(1000000000, 9999999999);
        }

        $request['product_code'] = $number;

        Product::create($request->all());

        return redirect('product');
    }

    public function productCodeExists($number)
    {
        return Product::where('product_code', $number)->exists();
    }
}
