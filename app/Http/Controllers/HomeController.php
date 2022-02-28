<?php

namespace App\Http\Controllers;

use App\OrderProduct;
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
        $array= [];

        //news
        $news = Product::take(4)->get();

        //Latest product
        $latestProduct = Product::orderby('id', 'DESC')->take(8)->get();

        //Best Sellers
        $orders = OrderProduct::all()->groupBy('product_id');
        foreach ($orders as $order){
            foreach ($order as $product){
                array_push($array, $product->product_id);
            }

        }
        $bestellers = Product::whereIn('id', $array)->take(8)->get();

        return view('home', [
            'latestProduct'=>$latestProduct,
            'news'=> $news,
            'bestellers' =>$bestellers
        ]);
    }

    public function orders(){
        $user = auth()->user();
        return view('orders', [
            'order'=>$user->orders
        ]);
    }

    public function contact(){
        return view('contact');
    }

}
