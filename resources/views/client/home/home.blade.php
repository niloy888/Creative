@extends('client.master')
@section('home-content')

    @include('client.slider.slider')
    <!-- Featured Product -->

    <section id="product" class="featured">
        <div class="container-fluid section-bg">
            <div class="row">
                <div class="col-md-12 m-2">
                    <h2>Discover <b>Categories</b></h2>
                    <div>
                        <!-- Carousel indicators -->
                        <!--<ol class="carousel-indicators">-->
                        <!--	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
                        <!--	<li data-target="#myCarousel" data-slide-to="1"></li>-->
                        <!--	<li data-target="#myCarousel" data-slide-to="2"></li>-->
                        <!--</ol>   -->
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">

                            <div class="row text-center">

                                @foreach($categories as $category)
                                <div class="col-md-2 col-sm-6  p-1">
                                    <div class="img-box bg-white m-2 p-2 image-box">
                                        <a href="cart.html" type="btn" class="text-dark no-decoration">
{{--                                            <img src="assets/images/trending-1.png" class="img-responsive img-fluid p-3" alt="">--}}
                                            <img src="http://gadgetoy.com/ecommerce/{{$category->category_image}}" class="img-responsive img-fluid p-3" alt="">
                                            <h5 class="">{{$category->category_name}}</h5>
                                        </a>
                                    </div>
                                </div>
                                 @endforeach

                            </div>



                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>



    <!-- products -->

    <!--  advertse area  -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">

                <div class="advertise">
                    <!-- google sign in     -->
                    <div class="adv-1">
                        <img src="{{asset('/')}}assets/images/logo.png" alt="" />
                        <a>Sign up using google</a>

                    </div>
                </div>
            </div>

            <div class="col-sm-6">

                <div class="advertise">
                    <!-- google sign in     -->
                    <div class="adv-1">
                        <img src="{{asset('/')}}assets/images/logo.png" alt="" />
                        <a href="#">sign up using google</a>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <section id="product" class="featured p-5">

        <h3> Discover Zone </h3>

        <div class="container-fluid">
            <div class="row bg-white">



                @foreach($products as $product)
                <div class="col p-3 border home-product">
                    <span class="bg-danger rounded-right p-2 text-white">Danger</span>

                    <div class="img-box ">
                        <a href="cart.html" type="btn" class="text-dark nounderline nav-link">
                            <img src="http://gadgetoy.com/ecommerce/{{$category->category_image}}" class="img-responsive img-fluid" alt="">
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="cart.html" type="btn" class="text-dark no-decoration">
                            <span class="text-info"> {{$product->product_name}} </span>
                        </a>

                        <div class="product-info mt-3">
                            <span class="font-weight-bold text-danger h5">৳{{$product->product_price}} </span>
                            <span class="text-muted ml-4"> <del>৳{{$product->product_price}} </del></span>
                        </div>

                    </div>

                    <div class="star">
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star-half"></span>
                        <span class="ion-ios-star-outline"></span>
                    </div>


                    <div class="font-weight-bold text-success text-right">In Stock </div>

                </div>
                @endforeach


            </div>
        </div>

    </section>


@endsection
