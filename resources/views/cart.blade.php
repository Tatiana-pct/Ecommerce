@extends('layout.master')

@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
         @if($message = Session::get('success'))
             <div class="alert alert-success alert-block">
                 <button type="button" class="close" data-dismiss="alert">X</button>
                 {{$message}}

             </div>
            @endif
            <div class="cart_inner">
                @if(Cart::count() > 0)
                    <h2>
                        {{Cart::count()}} item(s) in shopping cart
                    </h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach(Cart::content() as $product)
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="{{ voyager::image($product->model->image)}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>{{$product->model->name}}</h4>
                                        <p>{{$product->model->details}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>$ {{$product->model->price}}</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input disabled type="text" name="qty" id="sst" maxlength="12" value="x {{$product->qty}}" title="Quantity:"
                                           class="input-text qty">
                                </div>
                            </td>
                            <td>
                                <form action="{{route('cart.destroy', $product->rowId)}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}

                                    <button type="submit" class="btn-link">remove</button>
                                </form>
                            </td>
                        </tr>
                            @endforeach
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Subtotal</h5>
                                <p>Taxe</p>
                                <h4>Total</h4>
                            </td>
                            <td>
                                <h5> {{Cart::subtotal()}} </h5>
                                <p> {{Cart::tax()}} </p>
                                <h4> {{Cart::total()}} </h4>
                            </td>
                        </tr>
                        <tr class="out_button_area">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="{{route('shop.index')}}">Continue Shopping</a>
                                    <a class="primary-btn" href="{{route('checkout.index')}}">Proceed to checkout</a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                @else
                    <h3 class="my-3 text-center"> Not item in shopping cart</h3>
                    <div class="checkout_btn_inner d-flex justify-content-around">
                        <a class="gray_btn" href="{{route('shop.index')}}">Continue Shopping</a>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
@stop