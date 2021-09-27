@extends('layouts.app',['title'=>'Channels Gas Plant | Product Details'])


<!--====== INCLUDE HEADER PART STARTS======-->
@section('header')
    @include('partials.headerPart')
@endsection
<!--====== INCLUDE HEADER PART ENDS======-->

<!--====== INCLUDE BANNER PART STARTS======-->
@section('slider')
    @include('partials.pageBanner',['bannerContent'=>'Product Details','bannerImg'=>'gas-banner.jpg'])
@endsection
<!--====== INCLUDE BANNER PART ENDS======-->

@section('content')

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images">
                            <div class="text-center p-4"> <img src="{{ asset("chnlsgasplant/images/product/$product->image") }}" style="width: 100%" /> </div>
                            {{-- <div class="thumbnail text-center"> <img onclick="change_image(this)" src="https://i.imgur.com/Rx7uKd0.jpg" width="70"> <img onclick="change_image(this)" src="https://i.imgur.com/Dhebu4F.jpg" width="70"> </div> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <a href="{{route('products')}}"><i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span></a> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span>
                                <h5 class="text-uppercase">{{ $product->name }}</h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price">&#8358;{{ $product->price }}</span>
                                    {{-- <div class="ml-2"> <small class="dis-price">$59</small> <span>40% OFF</span> </div> --}}
                                </div>
                            </div>
                            <p class="about">{!!$product->description!!}</p>
                            <div class="sizes mt-2">
                                <h6 class="text-uppercase">Size</h6> 
                                <label class="radio"> <input type="radio" name="size" value="S" checked> <span>{{$product->size}}</span></label>
                                
                            </div>
                            <div class="cart mt-4 align-items-center btn-group">
                                <span class="add_to_cart_button">
                                    <a href="{{ route('cart.create', ['id' => $product->id]) }}" class="btn btn-primary text-uppercase mr-2 px-4">Add to cart</a>
                                </span>
                                 
                                 <a href="{{ route('cart.cartCheckout') }}" class="btn btn-success text-uppercase mr-2 px-4">Check Out</a>
                     
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('custom_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('chnlsgasplant/plugins/toastr/mdtoast.css') }}">

    <style>
        body {
    /* background-color: #000 */
}

.card {
    border: none
}

.product {
    background-color: #eee
}

.brand {
    font-size: 13px
}

.act-price {
    color: red;
    font-weight: 700
}

.dis-price {
    text-decoration: line-through
}

.about {
    font-size: 14px
}

.color {
    margin-bottom: 10px
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    padding: 2px 9px;
    border: 2px solid #ff0000;
    display: inline-block;
    color: #ff0000;
    border-radius: 3px;
    text-transform: uppercase
}

label.radio input:checked+span {
    border-color: #ff0000;
    background-color: #ff0000;
    color: #fff
}

.btn-danger {
    background-color: #ff0000 !important;
    border-color: #ff0000 !important
}

.btn-danger:hover {
    background-color: #da0606 !important;
    border-color: #da0606 !important
}

.btn-danger:focus {
    box-shadow: none
}

.cart i {
    margin-right: 10px
}
    </style>
@endsection

@endsection

 {{-- INCLUDE CUSTOM JAVASCRIPT FILE --}}
 @section('custom_scripts')
 @include('includes.addToCartJs')
@endsection