<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //Gérer le paiement
    public function checkout(){
        return view('checkout');
    }

    //En cas de paiement reussit
    public function success(){
        return view('success');
    }
}
