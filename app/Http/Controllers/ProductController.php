<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;

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

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('product.index');
    }
}
