<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{

    /**
     * Method Shows the index page of shopping cart
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $products = Product::all();

        return view('shop.index', ['products' => $products]);
    }
}
