@extends('layout.master')

@section('content')

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>register</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home <span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Register</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Login Box Area =================-->
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="img/login.jpg" alt="">
                        <div class="hover">
                            <h4>Already have acccount ?</h4>
                            <p>There are advances being made in science and technology everyday, and a good example of this is the</p>
                            <a class="primary-btn" href="{{route('login')}}">Log in</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Sign up</h3>
                        <form class="row login_form" id="contactForm" novalidate="novalidate" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <!--Name-->
                            <div class="col-md-12 form-group{{ $errors->has('Name') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" id="Name" name="Name" placeholder="Your Name" value="{{ old('Your name') }}">
                                @if ($errors->has('Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Name') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <!--Email-->
                            <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Your email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!--Password-->
                            <div class="col-md-12 form-group{{ $errors->has('Password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" id="Password" name="Password" placeholder="Your Password" value="{{ old('Password') }}">
                                @if ($errors->has('Password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- Password_confirmation-->
                            <div class="col-md-12 form-group{{ $errors->has('Password_confirmation') ? ' has-error' : '' }}">
                                <input type="Password" class="form-control" id="Password_confirmation" name="Password_confirmation" placeholder="Your Password_confirmation" value="{{ old('Password_confirmation') }}">
                            </div>

                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Sign up</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->




@endsection
