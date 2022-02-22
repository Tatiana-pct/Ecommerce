<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{route('home')}}"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav mr-auto ml-5">

                        <li class="nav-item "><!-- Home  -->
                            <a class="nav-link" href="{{route('home')}}">
                                <i class="fas fa-home"></i> Home </a>
                        </li><!--  end home -->

                        <li class="nav-item submenu dropdown"><!-- shop  -->
                            <a href="{{route('shop.index')}}" class="nav-link" >
                                <i class="fas fa-shopping-bag" ></i> Shop</a>
                        </li><!-- end shop -->

                        <li class="nav-item"><!-- contact  -->
                            <a class="nav-link" href="{{route('contact')}}">
                                <i class="fas fa-user-plus"></i> Contact</a>
                        </li><!-- end contact-->

                        </ul><!-- nab-bar left-->






                    <ul class="nav navbar-nav menu_nav ml-auto">

                            <li class="nav-item "><!-- register  -->
                                <a class="nav-link" href="{{route('register')}}">
                                    <i class="fas fa-user-plus"></i> sign Up</a>
                            </li><!--  end register-->
                            @guest

                            <li class="nav-item submenu dropdown"><!-- login  -->
                                <a href="{{route('login')}}" class="nav-link" >
                                    <i class="fas fa-shopping-bag" ></i> Login</a>
                            </li><!-- end login-->
                        @else
                            <li class="nav-item"><!-- orders  -->
                                <a class="nav-link" href="{{route('orders')}}">
                                    <i class="fas fa-truck"></i> orders</a>
                            </li><!-- end orders -->

                            <li class="nav-item"><!--  log out  -->
                                <a class="nav-link" href="{{route('logout')}}">
                                    <i class="fas fa-sign-out-alt"></i> logout</a>
                            </li><!-- logout-->
                        @endguest
                        <li class="nav-item"><!--  cart -->
                            <a class="nav-link" href="{{route('cart.index')}}">
                                <i class="fas fa-shopping-cart"></i>
                                Cart

                                {{--mise en place de l'enumeration de nbr d'article dans la panier--}}
                                @if(Cart::instance('default')->count() > 0)
                                    <span class="badge-primary"> {{cart::instance('default')->count()}} </span>

                                @endif
                            </a>
                        </li><!--  end cart -->
                    </ul><!-- nav bar right-->
                </div>
            </div>
        </nav>
    </div>

</header>
<!-- End Header Area -->