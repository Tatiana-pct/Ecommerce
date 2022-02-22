<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index(){
        return view('cart');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');
        return redirect()->route('cart.index')->with('success','produit ajouté a votre panier !');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success', 'le produite abien été suppimé du panier');
    }

    public function reset(){
    cart::destroy();

    }
}
