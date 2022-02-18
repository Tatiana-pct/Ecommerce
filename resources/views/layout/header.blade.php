<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav mr-auto ml-5">
                        <li class="nav-item "><a class="nav-link" href="{{route('home')}}">
                                <i class="fas fa-home"></i> Home </a>
                        </li><!-- home -->

                        <li class="nav-item submenu dropdown">
                            <a href="{{route('shop.index')}}" class="nav-link" >
                                <i class="fas fa-shopping-bag" ></i> Shop</a>
                        </li><!-- shop -->

                        <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">
                                <i class="fas fa-user-plus"></i> Contact</a>
                        </li><!--contact-->

                        </ul><!-- nab-bar left-->


                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item "><a class="nav-link" href="index.html">
                                <i class="fas fa-sign-in-alt"></i> sign Up</a>
                        </li><!-- sign in-->

                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link " >
                                <i class="fas fa-shopping-bag" ></i> Login</a>
                        </li><!-- login-->

                        <li class="nav-item"><a class="nav-link" href="{{route('orders')}}">
                                <i class="fas fa-truck"></i> orders</a>
                        </li><!-- orders -->

                        <li class="nav-item"><a class="nav-link" href="#">
                                <i class="fas fa-sign-out-alt"></i> logout</a>
                        </li><!-- logout-->

                        <li class="nav-item"><a class="nav-link" href="{{route('cart.index')}}">
                                <i class="fas fa-shopping-cart"></i> cart</a>
                        </li><!-- cart -->
                    </ul><!-- nav bar right-->
                </div>
            </div>
        </nav>
    </div>

</header>
<!-- End Header Area -->