<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
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

            $order = Order::create([
                'user_id'=>auth()->user()->id,
                'paiement_firstname'=>$request->firstname,
                'paiement_name'=>$request->name,
                'paiement_phone'=>$request->phone,
                'paiement_email'=>$request->email,
                'paiement_address'=>$request->address,
                'paiement_city'=>$request->city,
                'paiement_postalcode'=>$request->postalcode,
                'discount'=> session()-get()('coupon')['name']?? null,
                'paiement_total'=>session()->has('coupon') ?  round(Cart::total() - session()->get('coupon')['discount'],2) : Cart::total(),

            ]);

            foreach (Cart::content()as $product){
                orderProduct::create([
                    'order_id'=>$order->id,
                    'product_id=>'=>$product->id,
                    'quantity' => $product->qty

                ]);
            }

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
        $order = Order::latest()->first();
        //$orderProducts = OrderProduct::where('order_id', $order->id)->get();

        Cart::destroy();
        session()->forget('coupon');

        return view('success', [
            'order'=> $order,
        ]);
    }
}
