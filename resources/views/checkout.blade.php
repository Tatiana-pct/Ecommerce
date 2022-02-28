@extends('layout.master')

@section('includes')
<script src="http://js.stripe.com/v3/"></script>
@stop

@section('content')
    <!-- Start Banner Area -->
    {!! Breadcrumbs::render('checkout') !!}
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" action="{{route('checkout.store')}}" method="POST" id="payment-form" >
                            {{csrf_field()}}
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="firstname" name="firstname">
                                <span class="placeholder" data-placeholder="First name"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="lastname" name="name">
                                <span class="placeholder" data-placeholder="Last name"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="phone">
                                <span class="placeholder" data-placeholder="Phone number"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="email">
                                <span class="placeholder" data-placeholder="Email Address"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="address">
                                <span class="placeholder" data-placeholder="Address"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city">
                                <span class="placeholder" data-placeholder="Town/city"></span>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="postalcode" placeholder="Postcode/ZIP">
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
                            </div>
                            <button id="complete-order" type="submit" class="primary-btn my-3"> Proced to paiement</button>
                        </form><!--end paiement-->
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                                @foreach(Cart::content() as $product)
                                  <li><a href="#">{{$product->name}}<span class="middle">x {{$product->qty}}</span> <span class="last">${{$product->price}}</span></a></li>
                                @endforeach
                             </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>${{Cart::subtotal()}}</span></a></li>

                                @if(session()->has('coupon'))
                                    <li><a href="#">Discount ({{session()->get('coupon')['name']}}) <span>- $ {{session()->get('coupon')['discount']}}</span></a></li>
                                    <form action="{{route('coupon.destroy')}}" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button class="btn" type="submit">
                                            <i class="fas fa-trash"> </i>
                                        </button>
                                    </form>
                                @endif

                                <li><a href="#">Taxe <span>{{Cart::tax()}}</span></a></li>
                                <li><a href="#">Total <span>${{session()->has('coupon')
                                    ? Cart::total() - session()->get('coupon')['discount']
                                    : Cart::total()
                                }}</span></a></li>
                            </ul>
                        </div><!--end your order-->
                        <div class="coupon my-3">
                            <div class="code">
                                <p>have a code ?</p>
                                <form action="{{route('coupon.store')}}" method="POST">
                                    {{csrf_field()}}
                                    <div class="d-flex align-item-center contact_form">
                                        <input type="text" name="coupon" id="coupon" class="form-control" placeholder="Coupon code">
                                        <button class="primary-btn my-3" type="submit">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </div>
                                </form><!--end form-->
                            </div><!--end code-->
                        </div><!--end coupon-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

@stop

@section('js')

<script>
//Create a strip client
var strip = Stripe('pk_test_08twkYsI7DmVczbeuoKND5n8001ZG3KdU6');

//create an instance of elements.
var elements = strip.elements();

//custom styling can be passed to otion when creating en Element
var style = {
    base:{
        color:'#32325d',
        fontFamily:'"helvetica neue", helvetica, sans-serif',
        fontSmoothing:'antialiased',
        fontsize: '16 px',
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
var card = elements.create('card', {style: style});

//add an instance of the card Element into the 'card-element <div>
card.mount('#card-element');

//handle real-time validation error from the card element.
card.addEventListener('change', function(event){
    var displayError = document.getElementById('card-errors');
    if (event.error){
        displayError.textContent = event.error.message;
    }else{
        displayError.textContent = '';
    }
});

//handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event){
    event.preventDefault();

    var options = {
        firstname: document.getElementById('firstname').value,
        lastname: document.getElementById('lastname').value,
        email: document.getElementById('email').value,

    }
    console.log(options)

    strip.createToken(card, options).then(function(result) {
        if (result.error) {
            //Inform the user if there was an error
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            //send the token to your server.
            stripTokenHandler(result.token);
        }
    });
});


//submit the form with token ID
function stripTokenHandler(token){
    //Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type','hidden');
    hiddenInput.setAttribute('name','stripToken');
    hiddenInput.setAttribute('value','token.id');
    form.appendChild(hiddenInput);

    //submit the form
    form.submit();
}

</script>
@stop