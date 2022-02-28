<?php

//Home
Breadcrumbs::register('home', function ($breadcrumbs){
$breadcrumbs->push('Home', route('home'));
});

//Contact
Breadcrumbs::register('contact', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact', route('contact'));
});

//Orders
Breadcrumbs::register('orders',function ($breadcrumbs){
    $breadcrumbs->parent('home');
   $breadcrumbs->push('Orders', route('orders'));
});


//Shop
Breadcrumbs::register('shop', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Shop', route('shop.index'));
});

//Cart
Breadcrumbs::register('cart', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('cart', route('cart.index'));
});

//Checkout
Breadcrumbs::register('checkout', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Checkout', route('checkout.index'));
});


//Confirmation
Breadcrumbs::register('confirmation', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Confirmation', route('checkout.success'));
});

//Shop > Product
Breadcrumbs::register('product', function ($breadcrumbs, $product){
    $breadcrumbs->parent('shop');
    $breadcrumbs->push('$product->name', route('shop.show', $product->slug));
});

//ForgotPassword
Breadcrumbs::register('forgotPassword', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Forgot Password', route('password.email'));
});


//resetPassword
Breadcrumbs::register('resetPassword', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Reset Password', route('password.reset'));
});

//login
Breadcrumbs::register('login', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Login', route('login'));
});

//register
Breadcrumbs::register('register', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Register', route('register'));
});
