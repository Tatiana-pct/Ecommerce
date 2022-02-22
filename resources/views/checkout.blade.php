@extends('layout.master')

@section('includes')
<script src="http://js.stripe.com/v3/"></script>
@stop

@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="first" name="name">
                                <span class="placeholder" data-placeholder="First name"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="last" name="name">
                                <span class="placeholder" data-placeholder="Last name"></span>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="company" name="company" placeholder="Company name">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="number">
                                <span class="placeholder" data-placeholder="Phone number"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="compemailany">
                                <span class="placeholder" data-placeholder="Email Address"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value="1">Country</option>
                                    <option value="2">Country</option>
                                    <option value="4">Country</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="add1">
                                <span class="placeholder" data-placeholder="Address line 01"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add2" name="add2">
                                <span class="placeholder" data-placeholder="Address line 02"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city">
                                <span class="placeholder" data-placeholder="Town/City"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value="1">District</option>
                                    <option value="2">District</option>
                                    <option value="4">District</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Create an account?</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group"><!--paiement-->
                                <div class="creat_account">
                                    <div class="form-group">
                                        <label for="card-element">
                                            Credit or debit cart
                                        </label>
                                        <div id="card-element">
                                            <!-- A stripe Element will be insert here3.-->
                                        </div>
                                        <!-- use to displau form error.-->
                                        <div id="cart-error" role="alert"></div>
                                     </div>
                                </div>
                            </div><!--end paiement-->
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                                <li><a href="#">Fresh Blackberry <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                                <li><a href="#">Fresh Tomatoes <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                                <li><a href="#">Fresh Brocoli <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>$2160.00</span></a></li>
                                <li><a href="#">Shipping <span>Flat rate: $50.00</span></a></li>
                                <li><a href="#">Total <span>$2210.00</span></a></li>
                            </ul>
                        </div><!--end your order-->
                        <div class="coupon my-3">
                            <div class="code">
                                <p>have a code ?</p>
                                <form action="#" method="POST">
                                    <div class="d-flex align-item-center contact_form">
                                        <input type="text" name="coupon_code" id="coupon_code" class="form-control" placeholder="Coupon code">

                                        <button class="primary-btn my-3" type="submit">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </div>
                                </form><!--end form-->
                            </div><!--end code-->
                        </div><!--end coupon-->
                    </div>
    <!--================End Checkout Area =================-->

@stop

@section('js')

<script>
//Create a strip client
var strip = Stripe('pk_test_08twkYsI7DmVczbeuoKND5n8001ZG3KdU6');

//create an instance of elements.
var element = stripe.element();

//custom styling can be passed to otion when creating en Element

var style = {
    base:{
        color:'#32325d',
        fontFamily:'"helvetica neue", helvetica, sans-serif,
        fontSmoothing:'antialiased',
        fontsize: 16px,
        '::placehorlder':{
            color:'#aab7c4'
        }
    },
    invalid:{
        color:'#fa755a',
        iconcolor:'#fa755a'
    }
};

//create an instance of the cart element
var card = element.create('card', {style: style});

//add an instance of the card Element into the 'card-element <div>
card.mount('#cart-element');

//handle real-time validation error from the card element.
card.addEventlistener('change', function(event){
    var displeyError = docuement.getElementById('card-errors');
    if (event.error){
        displayError.textContent = event.error.message;
    }else{
        displayError.textContent = '';
    }
});

//handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function (event){
    if (result.error){
        //Inform the user if there was an error
        var errorElement = document.getElementById('card-errors');
    }else{
       //send the token to your server.
       stripTokenHandler(result.token);
    }
});


//submit the form with token ID
function stripTokenHandler(token){
    //Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type','hidden');
    hiddenInput.setAttribute('name','striptoken');
    hiddenInput.setAttribute('value','token.id');
    form.appendChild(hiddenInput);

    //submit the form
    form.submit();
}




</script>
@stop