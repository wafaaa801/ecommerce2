<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class ProductController extends Controller
{
    public function getProducts()
    {
    	$products = Product::all();
    	return view('shop', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id)
    {
    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product, $product->id);

    	$request->session()->put('cart', $cart);
    	return redirect()->route('shop');
    }

    public function getRemoveItem($id)
    {
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->removeItem($id);

    	Session::put('cart', $cart);
    	return redirect()->route('product.shoppingCart');
    }

    public function getAddItem(Request $request, $id)
    {
    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product, $product->id);

    	$request->session()->put('cart', $cart);
    	return redirect()->route('product.shoppingCart');
    }

    public function getReduceByOne($id)
    {
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->reduceByOne($id);
    	
    	Session::put('cart', $cart);
    	return redirect()->route('product.shoppingCart');
    }

    public function getCart()
    {
    	if(!Session::has('cart'))
    	{
    		return view('shopping-cart');
    	}

    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	return view('shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart-> totalPrice]);

    }


}
