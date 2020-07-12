@extends('client.master')


@section('home-content')


    <div class="row container-fluid featured pl-5 pt-3">

        <div class="col-12 bg-white text-center p-2 h3"> UPS	</div>


        <div class="col-6 bg-white border-right p-4">



            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" style="margin-bottom:5rem" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(88).jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(121).jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg" alt="Third slide">
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg"
                                                                                             class="img-fluid"></li>
                    <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg"
                                                                             class="img-fluid"></li>
                    <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg"
                                                                             class="img-fluid"></li>
                </ol>
            </div>
            <!--/.Carousel Wrapper-->


        </div>






        <div class="col-6 bg-white p-5">


            <div class="col-12 font-weight-bold h5">{{$product->product_name}}</div>

            <div class="col-12 mt-3">
                <button type="button" class="btn btn-danger">20% OFF</button>  <button type="button" class="btn btn-primary ml-3">Save ৳ 9999 </button>
            </div>


            <div class="col-12 mt-3">{!! $product->product_description !!}</div>

            <div class="col-12 text-secondary mt-3">
                <i class="fa fa-check-square-o" aria-hidden="true"></i> 1 year waranty <br/>
                <i class="fa fa-check-square-o" aria-hidden="true"></i> Free delivery <br/>
                <i class="fa fa-check-square-o" aria-hidden="true"></i> Free delivery <br/>
            </div>

            <div class="col-12 mt-3">
                <div class="row">


                    <div class="col-4">
                        <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                          <i class="fa fa-minus"></i>
                                        </button>
                                    </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
                            <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </span>
                        </div>
                    </div>


                    <div class="col-6">
                        <button type="button" class="col-12 btn btn-primary border"><i class="fa fa-shopping-cart" style="color:#dc3545"></i> &nbsp; Add to Cart</button>
                    </div>
                </div>
            </div>


        </div>
    </div>



    <div class="row container-fluid featured pl-5 p-3">


        <div class="col-12 bg-white border p-0">
            <section id="tabs">
                <div class="container">
                    <div class="row">
                        <div class="col-12 ">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-spec-tab" data-toggle="tab" href="#nav-spec" role="tab" aria-controls="nav-spec" aria-selected="true">Specification</a>
                                    <a class="nav-item nav-link" id="nav-desc-tab" data-toggle="tab" href="#nav-desc" role="tab" aria-controls="nav-desc" aria-selected="false">Description</a>
                                    <a class="nav-item nav-link" id="nav-rev-tab" data-toggle="tab" href="#nav-rev" role="tab" aria-controls="nav-rev" aria-selected="false">Product Review</a>
                                </div>
                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-spec" role="tabpanel" aria-labelledby="nav-spec-tab">
                                    <table class="table table-bordered table-sm">
                                        <tbody>
                                        <tr>
                                            <td class="w-25">Model</td>
                                            <td class="w-75">RT-110</td>
                                        </tr>
                                        <tr>
                                            <td class="w-25">Model</td>
                                            <td class="w-75">RT-110</td>
                                        </tr>
                                        <tr>
                                            <td class="w-25">Model</td>
                                            <td class="w-75">RT-110</td>
                                        </tr><tr>
                                            <td class="w-25">Model</td>
                                            <td class="w-75">RT-110</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">
                                    {!! $product->product_description !!}
                                </div>
                                <div class="tab-pane fade" id="nav-rev" role="tabpanel" aria-labelledby="nav-rev-tab">


                                    <div class="container">



                                        <div class="row">
                                            <div class="col-12">

                                                <div class="review-block">



                                                    @foreach($reviews as $review)
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                                                            <div class="review-block-name"><a href="#">{{$review->full_name}}</a></div>
                                                            <div class="review-block-date">{{$review->created_at}}</div>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="review-block-rate star">
                                                                @if($review->rating==1)
                                                                <span class="ion-ios-star"></span>
                                                                <span class="ion-ios-star-outline"></span>
                                                                <span class="ion-ios-star-outline"></span>
                                                                <span class="ion-ios-star-outline"></span>
                                                                <span class="ion-ios-star-outline"></span>
                                                                @elseif($review->rating==2)
                                                                    <span class="ion-ios-star"></span>
                                                                    <span class="ion-ios-star"></span>
                                                                    <span class="ion-ios-star-outline"></span>
                                                                    <span class="ion-ios-star-outline"></span>
                                                                    <span class="ion-ios-star-outline"></span>
                                                                @elseif($review->rating==3)
                                                                    <span class="ion-ios-star"></span>
                                                                    <span class="ion-ios-star"></span>
                                                                    <span class="ion-ios-star"></span>
                                                                    <span class="ion-ios-star-outline"></span>
                                                                    <span class="ion-ios-star-outline"></span>
                                                                @elseif($review->rating==4)
                                                                    <span class="ion-ios-star"></span>
                                                                    <span class="ion-ios-star"></span>
                                                                    <span class="ion-ios-star"></span>
                                                                    <span class="ion-ios-star"></span>
                                                                    <span class="ion-ios-star-outline"></span>
                                                                @elseif($review->rating==5)
                                                                    <span class="ion-ios-star"></span>
                                                                    <span class="ion-ios-star"></span>
                                                                    <span class="ion-ios-star"></span>
                                                                    <span class="ion-ios-star"></span>
                                                                    <span class="ion-ios-star"></span>
                                                                @endif
                                                            </div>
                                                            <div class="review-block-title">{{$review->description}}</div>
                                                            <div class="review-block-description">{{$review->description}}</div>
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                    <hr/>
                                                </div>
                                            </div>


                                        </div>





                                        <div class="row">

                                            <div class="col-8 bg-info pl-5">
                                                <div class="col-12 h4 text-white text-center">    Post a Review  </div>
                                                <span
                                                    class="text-danger">{{$errors->has('description') ? $errors->first('description') : ' '}}</span>
                                                <span
                                                    class="text-danger">{{$errors->has('title') ? $errors->first('title') : ' '}}</span>
                                                <form action="{{route('product-review')}}" method="post">
                                                    @csrf
                                                    <div class="row form-group input-group col-12">


                                                        <div class="input-group-prepend col-12 m-1">
                                                            <span class="input-group-text"> <i class="fa fa-hand-o-right"></i> </span>

                                                            <input name="title" class="form-control" placeholder="Title" type="text">
                                                        </div>

                                                        <div class="input-group-prepend col-12 m-1">
                                                            <span class="input-group-text"> <i class="fa fa-hand-o-right"></i> </span>

                                                            <input type="hidden" name="product_id"
                                                                   value="{{$product->id}}">
                                                            <input type="hidden" name="client_id"
                                                                   value="{{Session::get('client_id')}}">
                                                            <textarea name="description" class="form-control" placeholder="Review"></textarea>
                                                        </div>

                                                        <div class="col-12 star-rating m-1 text-right star h3">
                                                            <span id="rating1" name="rating" class="fa fa-star-o pl" data-rating="1"></span>
                                                            <span id="rating1" class="fa fa-star-o pl" data-rating="2"></span>
                                                            <span id="rating1" class="fa fa-star-o pl" data-rating="3"></span>
                                                            <span id="rating1" class="fa fa-star-o pl" data-rating="4"></span>
                                                            <span id="rating1" class="fa fa-star-o pl" data-rating="5"></span>
                                                            <input id="rating" type="hidden" name="rating" class="rating-value" >
                                                        </div>

                                                        <div class="col-12 text-center"><button type="submit" class="btn btn-danger">Submit</button></div>

                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>



                                </div> <!-- /container -->




                            </div>

                        </div>

                    </div>
                </div>
            </section>
        </div>

    </div>


    <!-- Related Product -->




    <div class="row container-fluid featured p-5 pt-0">

        <div class="row bg-white">
            <div class="col-3 p-3 border home-product">
                <span class="bg-danger rounded-right p-2 text-white">Danger</span>

                <div class="img-box ">
                    <a href="cart.html" type="btn" class="text-dark nounderline nav-link">
                        <img src="assets/images/trending-1.png" class="img-responsive img-fluid" alt="">
                    </a>
                </div>

                <div class="product-info">
                    <a href="cart.html" type="btn" class="text-dark no-decoration">
                        <span class="text-info"> Microsoft Xbox One S 1TB Gaming Console with 1x Wireless Controller and Gears 5 Game Bundle </span>
                    </a>

                    <div class="product-info mt-3">
                        <span class="font-weight-bold text-danger h5">৳9999 </span>
                        <span class="text-muted ml-4"> <del>৳9999 </del></span>
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

                <button type="button" class="col-12 btn border"><i class="fa fa-shopping-cart" style="color:blue"></i> &nbsp; Add to Cart</button>


            </div>


            <div class="col-3 p-3 border home-product">
                <span class="bg-danger rounded-right p-2 text-white">Danger</span>

                <div class="img-box ">
                    <a href="cart.html" type="btn" class="text-dark nounderline nav-link">
                        <img src="assets/images/trending-1.png" class="img-responsive img-fluid" alt="">
                    </a>
                </div>

                <div class="product-info">
                    <a href="cart.html" type="btn" class="text-dark no-decoration">
                        <span class="text-info"> Microsoft Xbox One S 1TB Gaming Console with 1x Wireless Controller and Gears 5 Game Bundle </span>
                    </a>

                    <div class="product-info mt-3">
                        <span class="font-weight-bold text-danger h5">৳9999 </span>
                        <span class="text-muted ml-4"> <del>৳9999 </del></span>
                    </div>

                </div>

                <div class="star">
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star-half"></span>
                    <span class="ion-ios-star-outline"></span>
                </div>


                <div class="font-weight-bold text-danger text-right">Out of Stock </div>

            </div>


            <div class="col-3 p-3 border home-product">
                <span class="bg-danger rounded-right p-2 text-white">Danger</span>

                <div class="img-box ">
                    <a href="cart.html" type="btn" class="text-dark nounderline nav-link">
                        <img src="assets/images/trending-1.png" class="img-responsive img-fluid" alt="">
                    </a>
                </div>

                <div class="product-info">
                    <a href="cart.html" type="btn" class="text-dark no-decoration">
                        <span class="text-info"> Microsoft Xbox One S 1TB Gaming Console with 1x Wireless Controller and Gears 5 Game Bundle </span>
                    </a>

                    <div class="product-info mt-3">
                        <span class="font-weight-bold text-danger h5">৳9999 </span>
                        <span class="text-muted ml-4"> <del>৳9999 </del></span>
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


            <div class="col-3 p-3 border home-product">
                <span class="bg-danger rounded-right p-2 text-white">Danger</span>

                <div class="img-box ">
                    <a href="cart.html" type="btn" class="text-dark nounderline nav-link">
                        <img src="assets/images/trending-1.png" class="img-responsive img-fluid" alt="">
                    </a>
                </div>

                <div class="product-info">
                    <a href="cart.html" type="btn" class="text-dark no-decoration">
                        <span class="text-info"> Microsoft Xbox One S 1TB Gaming Console with 1x Wireless Controller and Gears 5 Game Bundle </span>
                    </a>

                    <div class="product-info mt-3">
                        <span class="font-weight-bold text-danger h5">৳9999 </span>
                        <span class="text-muted ml-4"> <del>৳9999 </del></span>
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

        </div>

    </div>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

    <script>
        $("#rating1").click(function(){
            $("#rating").val("1");
        });
        $("#rating2").click(function(){
            $("#rating").val("2");
        });
        $("#rating3").click(function(){
            $("#rating").val("3");
        });
        $("#rating4").click(function(){
            $("#rating").val("4");
        });
        $("#rating5").click(function(){
            $("#rating").val("5");
        });
    </script>

    <script>

        $('#blah').hide();


        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }

            $('#blah').show();
        }

        $("#file-upload").change(function () {
            readURL(this);
        });

    </script>

    <script src="{{asset('client/assets/js/custom/cart.js')}}"></script>
    {{-- <script src="{{asset('client/assets/js/custom/api.js')}}"></script> --}}



@endsection

