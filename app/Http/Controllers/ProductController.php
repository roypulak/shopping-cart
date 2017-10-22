<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class ProductController extends Controller
{
    public function getIndex(){
        $products = Product::all();
        return view( 'shop.index',[ 'products' => $products ] );
    }

    public function getAddToCart( Request $request, $id ){
        $product = Product::find( $id );
        $oldCart = Session::has( 'cart' ) ? Session::get( 'cart' ) : null;
        $cart = new Cart( $oldCart );
        $cart->add( $product, $product->id );

        $request->session()->put( 'cart', $cart );
        /* dump and die. To see what is is inside of cart object
        dd( $request->session()->get('cart' ) );
        */
        return redirect()->route();
    }
}
