<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $products = product::all();
        return view('home', [
            'products'=>$products
        ]);
    }


}
