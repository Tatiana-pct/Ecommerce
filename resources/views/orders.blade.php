@extends('layout.master')

@section('content')


    {!! Breadcrumbs::render('orders') !!}


    <div class="container my-5">
        <div class="orders">
            <h2 class="text-center"> Orders details</h2>
            @foreach($orders as $order)

            <div class="table-reponsive order_details_table">
                <div class="d-flex justify-content-between ml-5 px-5">
                    <h4>
                        <i class="fas fa-receipt"></i>
                        Order #{{$order->id}}
                    </h4>
                    <h4>Date: {{$order->created_at}}</h4>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <td class="col">Product</td>
                        <td class="col">Quantity</td>
                        <td class="col">Total</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order->products as $product)
                    <tr>
                        <td>{{$product->Name}}</td>
                        <td>X {{$product->pivot->quantity}}</td>
                        <td>$ {{round($product->price * $product->pivot->quantity, 2)}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td><b>Total</b></td>
                        <td></td>
                        <td>$ {{round($order->paiement_total)}}</td>
                    </tr>


                    </tbody>

                </table><!-- table -->
            </div>
            @endforeach
        </div>

    </div>

@stop