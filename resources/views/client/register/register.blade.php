<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Creative Information Technology</title>

    <!-- favicon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/')}}assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/')}}assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/')}}assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{asset('/')}}assets/favicon/site.webmanifest">


    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

    <!-- CSS files -->

    <link href="{{asset('/')}}assets/css/magnific-popup.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/owl.carousel.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/owl.carousel.theme.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/ionicons.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/main.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- top contact bar -->
<!--  <div class="container-fluid top-contact grey float-right">
     <i class="fa fa-phone-square logo-green ml-2 " aria-hidden="true"> <span class=""> 01818 010902 </span>||</i>
     <i class="fa fa-phone-square logo-green ml-2 " aria-hidden="true"> <span class=""> 01818 010902 </span>||</i>


 </div> -->
<!-- top contact bar -->

<!-- Site Header -->

<div class="row border-bottom">
    <div class="col-7"></div>

    <div class="col-5">

        <span class="col border-right"><a class="" href="#">About Us</a></span>
        <span class="col border-right"><a class="" href="#"> Contact Us</a></span>
        <span class="col border-right">

						 <a class="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                                  <span class="ion-log-in login-menu"> &nbsp; log in </span>
                                </a>

                                <div class="dropdown-menu login" aria-labelledby="navbarDropdown">

                                    	<div class="card login-form">
                                        	<div class="card-body">
                                        		<!--<h3 class="card-title text-center">Log in</h3>-->
                                        		<div class="card-text">
                                        			<!--
                                        			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                                        			<form>
                                        				<!-- to error: add class "has-danger" -->
                                        				<div class="form-group">
                                        					<label for="exampleInputEmail1">Email address</label>
                                        					<input type="email" class="form-control form-control-sm"
                                                                   id="exampleInputEmail1" aria-describedby="emailHelp">
                                        				</div>
                                        				<div class="form-group">
                                        					<label for="exampleInputPassword1">Password</label>

                                        					<input type="password" class="form-control form-control-sm"
                                                                   id="exampleInputPassword1">
                                        					<a href="#" style="float:left;font-size:9px;">Forgot password?</a>
                                        				</div>
                                        				<button type="submit"
                                                                class="btn btn-primary btn-block btn-robot">Sign in</button>

                                        				<div class="sign-up">
                                        					Don't have an account? <a
                                                                href="register.html">Create One</a>
                                        				</div>
                                        			</form>
                                        		</div>
                                        	</div>
                                        </div>
                                    </div>


						</span>
        <span class="col border-right"><a class="" href="#"><i class='fa fa-user'></i>&nbsp; Sign Up</a></span>


    </div>

</div>


<div id="navbar-head" class="site-header-bg">
    <div class="container-fluid">


        <div class="row align-items-center">


            <div class="col-3">
                <img src="{{asset('/')}}assets/images/head-logo.png" class="head-logo">
            </div>


            <div class="col-3">
                <p class="logo-green font-weight-bold">24/7 Support</p>
                <span class="ion-android-call logo-green font-weight-bold"> +880-1717-586186 </span>
            </div>


            <div class="col-6 ">

                <form>
                    <!-- <span class="input-group-btn"> -->
                    <!-- </span> -->
                    <!--  <a href="#" id="cart" class="logo-green"><i class="fa fa-shopping-cart logo-green"></i> Cart <span class="badge bg-green">3</span></a> -->
                    <div class="input-group">
                        <button class="btn btn-default btn-blue" type="button">Search</button>
                        <input type="text" class="form-control" placeholder="">
                        <a href="#" id="cart" class="logo-green mt-2 ml-2"><i
                                class="fa fa-shopping-cart logo-green"></i> Cart <span
                                class="badge bg-green">3</span></a>
                    </div>


                </form>


            </div>

            <!--  <div class="col-4 ">


             </div> -->
        </div>
    </div>
</div>

<!-- Header -->


<div class="container-fluid main-header">


    <nav class="navbar navbar-expand-lg navbar-light container-fluid">
        <a href="index.html"><img src="{{asset('/')}}assets/images/logo.png" class="nav-logo ml-2" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Products </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        @foreach($categories as $category)
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                                            href="#">{{$category->category_name}}</a>

                                <ul class="dropdown-menu">

                                    @foreach($subCategories as $subCategory)
                                        @if($subCategory->root_id==$category->id)

                                            <li><a class="dropdown-item"
                                                   href="#">{{$subCategory->category_name}}</a></li>
                                        @endif
                                    @endforeach

                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="feed.html">News Feed</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>


                <!--  <li class="nav-item">
                 <a href="cart.html"><span class="ion-android-cart"> 0 products </span> </a>
                 </li>
                  -->
                <!--  <li class="nav-item">
                   <form class="form-inline">
                     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                     <button class="btn btn-outline-success btn-robot my-2 my-sm-0" type="submit">Search</button>
                   </form>
                 </li> -->




            </ul>
        </div>
    </nav>

    <!-- Navigation -->
    <!--nav ends-->

</div> <!-- /#header -->


<div class="row container-fluid featured pl-5 pt-3">

    <div class="col-12 bg-white text-center p-2 h3"> Register</div>


    <div class="col-12 bg-white border p-0">


        <section>
            <div class="container col-md-4">
                <div class="row justify-content-center">
                    <div class="col-sm-12 card-body bg-danger">

                        <form action="{{route('registration-process')}}" method="post">
                            @csrf
                            <div class="form-group row align-items-center">
                                <div class="col mt-4">
                                    <input name="full_name" type="text" class="form-control" placeholder="Full Name">
                                    <span class="text-danger">{{$errors->has('full_name') ? $errors->first('full_name') : ' '}}</span>

                                </div>
                            </div>
                            <div class="form-group row align-items-center mt-4">
                                <div class="col">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ' '}}</span>

                                </div>
                            </div>

                            <div class="form-group row align-items-center mt-4">
                                <div class="col">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <span class="text-danger">{{$errors->has('password') ? $errors->first('password') : ' '}}</span>

                                </div>
                            </div>

                            <div class="form-group row align-items-center mt-4">
                                <div class="col">
                                    <input type="text" name="contact_no" class="form-control" placeholder="Contact No">
                                    <span class="text-danger">{{$errors->has('contact_no') ? $errors->first('contact_no') : ' '}}</span>

                                </div>

                            </div>


                            <div class="form-group row align-items-center mt-4">
                                <div class="col text-center">
                                    <input type="submit" value="Register" class="btn btn-success">
                                </div>
                            </div>
                            <div class="sign-up">
                                Already have an account? <a href="http://gadgetoy.com/ecommerce/client-login">Login
                                    Here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </div>
</div>


<!-- Footer -->
<section id="footer-widget" class="footer-widget">
    <div class="container-fluid header-bg">
        <div class="row">
            <div class="col-sm-3">
                <h3>Our Popular Products</h3>
                <ul>
                    @foreach($popularProducts as $product)
                        <li><a href="#">{{$product->product_name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-sm-3">
                <h3>Important Link</h3>
                <ul>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="#">Ipsum</a></li>
                    <li><a href="#">Dolar</a></li>
                    <li><a href="#">Set amet</a></li>
                    <li><a href="#">Iodiet lorem</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h3>Our Latest Products</h3>
                <ul>
                    @foreach($latestProducts as $product)
                        <li><a href="#">{{$product->product_name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-3 col-sm-3">
                <h3>Our Services</h3>
                <div class="widget-img-box bg-white m-2">
                    <a class="test-popup-link" href="{{asset('/')}}assets/images/widget-big-1.png">
                        <img class="widget-img" src="{{asset('/')}}assets/images/widget-1.png" alt="widget">
                    </a>
                    <a class="test-popup-link" href="{{asset('/')}}assets/images/widget-big-2.png">
                        <img class="widget-img" src="{{asset('/')}}assets/images/widget-2.png" alt="widget">
                    </a>
                    <a class="test-popup-link" href="{{asset('/')}}assets/images/widget-big-3.png">
                        <img class="widget-img" src="{{asset('/')}}assets/images/widget-3.png" alt="widget">
                    </a>
                    <a class="test-popup-link" href="{{asset('/')}}assets/images/widget-big-4.png">
                        <img class="widget-img" src="{{asset('/')}}assets/images/widget-4.png" alt="widget">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer text-center">
    <p>&copy; Developed by <a href="https://cursorbd.com/">CURSOR LTD</a></p>
</footer>
<!-- Scripts -->
<script src="{{asset('/')}}assets/js/jquery-1.12.3.min.js"></script>
<script src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/')}}assets/js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}assets/js/script.js"></script>

</body>
</html>
