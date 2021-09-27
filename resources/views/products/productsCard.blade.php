{{-- <div class="col-lg-3 col-md-6 col-sm-6 mb-5">
    <div class="singel-products mt-30">
        <div class="products-image">
            <a href="{{ route('product', $product->slug) }}"> <img
                    src="{{ asset("chnlsgasplant/images/product/$product->image") }}"
                    alt="Products"></a>
        </div>
        <div class="products-contant">
            <h6 class="products-title"><a
                    href="{{ route('product', $product->slug) }}">{{ $product->name }}</a>
            </h6>
            <div class="price-rating d-flex justify-content-between">
                <div class="price">
                    <span
                        class="regular-price">&#8358;{{ $product->price }}</span>
                </div>
            </div>
            <p class="text">{{ $product->detail }}</p>
            <div class="products-cart add_to_cart_button">
                <a class="cart-add" href="{{ route('cart.create', ['id' => $product->id]) }}"><i class="fa fa-shopping-cart"></i> Add
                    to cart</a>
            </div>
        </div>
    </div>
</div> --}}

<div class="col-lg-4 col-md-6 col-sm-12 mb-3">
    <div class="card">
        <div class="img-container">
            <div class="d-flex justify-content-between align-items-center p-2 first"> <span class="percent">-25%</span>  </div>
            
            <img src="{{ asset("chnlsgasplant/images/product/$product->image") }}" class="img-fluid" style="width:100%; height:45vh">

        </div>
        <div class="product-detail-container">
            <div class="d-flex justify-content-between align-items-center">
               
                    <h6 class="mb-0">{{ $product->name }}</h6> <span class="text-primary font-weight-bold">&#8358;{{ $product->price }}</span>
                
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
                <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                <div class="size ratings"> Filled Cylinder</div>
            </div>

            
        </div>
        <div class=" btn-group mx-auto mb-3"> 
            <div class="products-cart add_to_cart_button">
            <a href="{{ route('cart.create', ['id' => $product->id]) }}" class="btn btn-primary cart-add"> Add To Cart <i class="fa fa-shopping-cart"></i> </a>

            </div>
            &nbsp;
            <a href="{{ route('product', $product->slug) }}" class="btn btn-secondary "> Product Details <i class="fa fa-link"></i> </a>
         </div>
    </div>
</div>

@section('custom_styles')
    <style>
       @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

body {
    background-color: #d6d6d6;
    /* font-family: "Poppins", sans-serif; */
    /* font-weight: 300 */
}

.card {
    border: none;
    border-radius: 10px
}

.percent {
    padding: 5px;
    background-color: red;
    border-radius: 5px;
    color: #fff;
    font-size: 14px;
    height: 35px;
    width: 70px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer
}

.wishlist {
    height: 40px;
    width: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    background-color: #eee;
    padding: 10px;
    cursor: pointer
}

.img-container {
    position: relative
}

.img-container .first {
    position: absolute;
    width: 100%
}

.img-container img {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px
}

.product-detail-container {
    padding: 10px
}

.ratings i {
    color: #a9a6a6
}

.ratings span {
    color: #a9a6a6
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
    height: 25px;
    width: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid #2e4db9;
    color: #2e4db9;
    font-size: 10px;
    border-radius: 50%;
    text-transform: uppercase
}

label.radio input:checked+span {
    border-color: #2e4db9;
    background-color: #2e4db9;
    color: #fff
}
    </style>
@endsection
