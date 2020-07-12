@extends('client.master')


@section('home-content')


    <div class="row container-fluid featured pl-5 pt-3">

        <div class="col-12 bg-white text-center p-2 h3"> Prolink	</div>


        <div class="col-3 bg-white border p-0">

            <div class="col-12 border p-0">

                <div class="col-12 btn-blue p-2 text-center h5 m-0">	Category </div>

                <div class="pt-2 pl-4">
                    <div class=""><input type="checkbox" aria-label="Checkbox for following text input"> UPS </div>
                    <div class=""><input type="checkbox" aria-label="Checkbox for following text input"> UPS </div>
                    <div class=""><input type="checkbox" aria-label="Checkbox for following text input"> UPS </div>
                    <div class=""><input type="checkbox" aria-label="Checkbox for following text input"> UPS </div>
                    <div class=""><input type="checkbox" aria-label="Checkbox for following text input"> UPS </div>
                    <div class=""><input type="checkbox" aria-label="Checkbox for following text input"> UPS </div>
                </div>

            </div>


            <div class="col-12 border p-0 mt-4">
                <div class="col-12 btn-blue p-2 text-center h5 m-0">	Price </div>
                <div class="row p-2">
                    <div class="col-2"> Start </div>
                    <input type="text" class="col-3 form-control" aria-label="Text input with checkbox">

                    <div class="col-2"> End </div>
                    <input type="text" class="col-3 form-control" aria-label="Text input with checkbox">

                    <button type="button" class="btn btn-default"> <i class="fa fa-search"></i> </button>
                </div>
            </div>






        </div>



        <div class="col-9 bg-white">


            @foreach($products as $product)
            <div class="row bg-white">


                <div class="col-3 p-3 border home-product">
                    <span class="bg-danger rounded-right p-2 text-white">Danger</span>

                    <div class="img-box ">
                        <a href="cart.html" type="btn" class="text-dark nounderline nav-link">
                            <img src="http://gadgetoy.com/ecommerce/{{$product->product_image}}" class="img-responsive img-fluid" alt="">
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="{{route('product',['id'=>$product->id,'category_id'=>$product->category_id])}}" type="btn" class="text-dark no-decoration">
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

                    <button type="button" class="col-12 btn border"><i class="fa fa-shopping-cart" style="color:blue"></i> &nbsp; Add to Cart</button>


                </div>
                @endforeach
            </div>
        </div>
    </div>


    <script src="{{asset('client/assets/js/custom/cart.js')}}"></script>
    {{-- <script src="{{asset('client/assets/js/custom/api.js')}}"></script> --}}
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="{{asset('client/assets/js/custom/filter.js')}}"></script>


@endsection
