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

<div class="col-md-4">
    <div class="card mt-3">
        <div class="product-1 align-items-center p-2 text-center"> <img src="{{ asset("chnlsgasplant/images/product/$product->image") }}" class="rounded" width="160">
            <h5>GARNIER</h5>
            <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
            <div class=" watchcost mt-3 text-dark"> <span>$60</span>
                <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            </div>
        </div>
        <div class="watch p-3 text-center text-white mt-3 cursor"> <span class="text-uppercase ">Add to cart</span> </div>
    </div>
</div> 