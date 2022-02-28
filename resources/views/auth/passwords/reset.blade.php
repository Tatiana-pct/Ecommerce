@extends('layout.master')

@section('content')

    <!-- Start Banner Area -->
    {{-- {!! Breadcrumbs::render('resetPassword') !!}--}}
    <!-- End Banner Area -->
    <!--================Login Box Area =================-->
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="{{asset('img/login.jpg')}}" alt="">
                        <div class="hover">
                            <h4>Password Reset Link</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{'status'}}
                            </div>
                        @endif
                        <h3>Reset Password </h3>
                        <form class="row login_form" id="contactForm" novalidate="novalidate" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                            <input type="hidden" name="token" value="{{$token}}">

                        <!--Email-->
                            <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Your email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div><!-- and Email-->

                            <!--Password-->
                            <div class="col-md-12 form-group{{ $errors->has('Password') ? ' has-error' : '' }}">
                                <input type="Password" class="form-control" id="Password" name="Password" placeholder="Your Password" >
                                @if ($errors->has('Password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Password') }}</strong>
                                    </span>
                                @endif
                            </div><!-- and Password-->

                            <!--password_confirmation-->
                            <div class="col-md-12 form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input type="Password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Your password_confirmation" value="{{ old('password_confirmation') }}">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div><!--password_confimation-->



                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn"> Reset Password </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->


@endsection
