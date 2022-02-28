@extends('layout.master')

@section('content')


{!! Breadcrumbs::render('shop') !!}

    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-categories">
                    <div class="head">Browse Categories</div>
                    <ul class="main-categories">
                        @foreach($categories as $category)
                            <li class="main-nav-list"><a data-toggle="collapse"href="#fruitVegetable" aria-expanded="false">
                                    <a href="{{route('shop.index',['category'=>$category->slug])}}">
                                    {{$category->name}}<span class="number"></span>
                                </a>

                            <li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="dropdown">
                        <a class="btn" href="{{route('shop.index', ['category'=>request()->categrory, 'sort' =>'asc'])}}">Prix croissant</a>
                        <a class="btn" href="{{route('shop.index', ['category'=>request()->categrory, 'sort' =>'desc'])}}">prix décroissant</a>

                    </div>


                    {{--{{$products->appends(request()->input())->link()}}--}}
                    <div class="pagination ml-auto">
                        <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <a href="#">6</a>
                        <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Filter Bar -->

                <!-- Start Best Seller -->
                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">
                        @foreach($products as $product)
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <a href=" {{route('shop.show',$product->slug)}}">
                                    <img class="img-fluid" src="{{Voyager::image($product->image)}}" alt="IMG-PRODUCT"><hr>
                                </a>

                                <div class="product-details">
                                    <h6>{{$product->name}}</h6>
                                    <p>{{$product->details}}</p>
                                    <div class="price">
                                        <h6>{{$product->price}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                <!-- End Best Seller -->
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center mb-5">
                    <div class="dropdown">
                        <a class="btn" href="{{route('shop.index', ['category'=>request()->categrory, 'sort' =>'asc'])}}">Prix croissant</a>
                        <a class="btn" href="{{route('shop.index', ['category'=>request()->categrory, 'sort' =>'desc'])}}">prix décroissant</a>
                    </div>
                    {{--{{$products->appends(request()->input())->link()}}--}}
                    <div class="pagination ml-auto">
                        <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <a href="#">6</a>
                        <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Filter Bar -->
            </div>
        </div>
    </div>


    @stop

