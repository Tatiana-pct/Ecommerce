<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

/*
    public function __construct()
    {
        $this->middleware('auth');
    }*/

    //Gérer le paiement
    public function checkout(){
        return view('checkout');
    }

    public function store(Request $request){
        \Stripe\Strip::setApiKey(env('STRIPE_SECRET'));
        try {
            $charge = \Stripe\Charge::create([
                'amount'=> session()->has('coupon') ?  round(Cart::total() - session()->get('coupon')['discount'],2) *100 : Cart::total() *100,
                'currency'=> 'eur',
                'description'=> 'mon paimennt',
                'source'=> $request->stipeToken,
                'receipt_email'=>$request->email,
                'metaData'=>[
                    'owner'=> $request->name,
                    'product'=> Cart::content()->tojson()
                ]
            ]);

            return redirect()->route('checkout.success')->with('success', 'Paiement hab been accepted !');

        }
        catch (\Stripe\Exception\CardErrorException $e){
            throw $e;
        }
    }

    //En cas de paiement reussit
    public function success(){
        if (!session()->has('success')){
            return  redirect()->route('home');
        }
        Cart::destroy();
        session()->forget('coupon');
        return view('success');
    }
}
