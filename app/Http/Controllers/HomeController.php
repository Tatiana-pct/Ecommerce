<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }

    public function shop(){
        return view('shop');
    }

    public function product(){
        return view('product');
    }

    public function cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }

    public function success(){
        return view('success');
    }

    public function orders(){
        return view('orders');
    }
}
