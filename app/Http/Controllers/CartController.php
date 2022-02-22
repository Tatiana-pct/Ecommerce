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
        return redirect()->route('cart.index')->with('success','product added to cart');
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
        return back()->with('success', 'product has been removed to cart !');
    }

    public function reset(){
    cart::destroy();

    }

    public function save($id){
        $item = Cart::get($id);
        Cart::remove($id);

        Cart::instance('save')-> add($item->id, $item->name,1, $item->price)->associate('App\Product');
        return redirect()->route('cart.index')->with('success','product saved for later !');
    }
}
