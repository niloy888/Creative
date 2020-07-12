<div class="row border-bottom">
    <div class="col-7"></div>

    <div class="col-5">

        <span class="col border-right"><a class="" href="#">About Us</a></span>
        <span class="col border-right"><a class="" href="#"> Contact Us</a></span>
        @if(!Session::get('client_id'))
            <span class="col border-right">

                 <a class="" href="#" data-toggle="modal" data-target="#exampleModal" aria-haspopup="true"
                    aria-expanded="false">
                          <span class="ion-log-in login-menu"> &nbsp; log in </span>
                        </a>


                <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
<div class="modal-dialog modal-sm" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Log In</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
    <form action="{{route('login-process')}}" method="post">
        @csrf
        <!-- to error: add class "has-danger" -->
        <div class="form-group row">
            <label for="exampleInputEmail1" class="col-3 col-form-label">Email</label>
            <input type="email" name="email" class="form-control form-control-sm col-9" id="exampleInputEmail1"
                   aria-describedby="emailHelp">
        </div>

            <div class="form-group row">
            <label for="exampleInputPassword1" class="col-3 col-form-label">Password</label>
            <input type="password" name="password" class="form-control form-control-sm col-9" id="exampleInputPassword1">
            <a href="#" style="float:left;font-size:12px;" class="pl-2">Forgot password?</a>
        </div>

            <button type="submit" class="btn btn-primary btn-block btn-robot">Sign in</button>

        <div class="sign-up">
            Don't have an account? <a href="{{route('client-register')}}">Create One</a>
        </div>
    </form>



</div>

</div>
</div>
</div>
</span>
            <span class="col border-right"><a class="" href="{{route('client-register')}}"><i class='fa fa-user'></i>&nbsp; Sign Up</a></span>
        @else
            <span class="col border-right"><a class="" href="#"><i class='fa fa-user'></i>&nbsp; Profile</a></span>
            <span class="col border-right"><a class="" href="#"><i class='fa fa-user'></i>&nbsp; Order List</a></span>
            <span class="col border-right"><a class="" href="{{route('client-logout')}}"><i class='fa fa-user'></i>&nbsp; Logout</a></span>
        @endif

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
        <a href="{{route('/')}}"><img src="{{asset('/')}}assets/images/logo.png" class="nav-logo ml-2" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{route('/')}}">Home</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Products </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        @foreach($categories as $category)
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                                            href="{{ route('category-products',['id'=>$category->id]) }}">{{$category->category_name}}</a>

                                <ul class="dropdown-menu">

                                    @foreach($subCategories as $subCategory)
                                        @if($subCategory->root_id==$category->id)

                                            <li><a class="dropdown-item"
                                                   href="{{ route('sub-category',['id'=>$subCategory->id]) }}">{{$subCategory->category_name}}</a></li>
                                        @endif
                                    @endforeach

                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"> Brands </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li class="dropdown-submenu" aria-labelledby="navbarDropdown"> @foreach($brands as $brand)
                                <a class="dropdown-item"
                                   href="{{ route('brand-product',['id'=>$brand->id]) }}">{{$brand->brand_name}}</a>
                            @endforeach

                        </li>


                    </ul>
                </li>


                <li class="nav-item dropdown">
                    AAA
                </li>


            </ul>
        </div>
    </nav>



</div> <!-- /.container -->
<div class="nutral"></div>
