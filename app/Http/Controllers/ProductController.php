<?php

namespace App\Http\Controllers;


use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;
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

    public function addToCart($id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        Session::put('cart', $cart);
        return redirect()->route('shop.index');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function checkout()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['totalPrice' => $total]);
    }

    public function submitCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->route('shopping-cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);


        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            \Stripe\Charge::create([
                "amount" => $cart->totalPrice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Making test payment."
            ]);

            Session::forget('cart');
            return redirect()->route('shop.index')->with('success', 'Shopping sucessfully made!');
        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
    }
  
}
