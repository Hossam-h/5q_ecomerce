@extends('includes.main')
@section('content')

<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>login</span></li>
            </ul>
        </div>
        <div class=" main-content-area">

            <div class="wrap-iten-in-cart">
                <h3 class="box-title">Products Name</h3>
                <ul class="products-cart">

                    @foreach($carts as $cart)
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="{{asset($cart->options->image)}}" alt=""></figure>
                        </div>

                        <div class="product-name">
                            <a class="link-to-product" href="javascript:void(0);">{{$cart->name}}</a>
                        </div>

                        <div class="price-field produtc-price">
                            <p class="price">$ {{$cart->price}}</p>
                        </div>
                        
                        <div class="price-field sub-total">
                            <p class="price">$ {{$cart->price * $cart->qty}}</p>
                        </div>
                        <div class="delete">
                            <form action="{{route('cart.destroy',$cart->rowId)}}" method="post">
                                @csrf
                                {{ method_field('delete') }}

                                <button type="submit" style="background:none;border: none;">
                                    <i class="fa fa-times-circle" style="font-size:25px;"></i>
                                </button>

                            </form>

                        </div>
                    </li>
                    @endforeach


                </ul>
            </div>

            <div class="summary">
                <div class="order-summary">
                    <h4 class="title-box">Order Summary</h4>
                    <p class="summary-info"><span class="title">Subtotal</span><b class="index">$ {{$allQty}}</b></p>
                    <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                    <p class="summary-info total-info "><span class="title">Total</span><b class="index">$
                            {{$allQty}}</b></p>
                </div>

                <div class="checkout-info">
                    <label class="checkbox-field">
                        <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have
                            promo code</span>
                    </label>
                    <a class="btn btn-checkout" href="checkout.html">Check out</a>
                    <a class="link-to-shop" href="{{route('shoping.index')}}">Continue Shopping<i class="fa fa-arrow-circle-right"
                            aria-hidden="true"></i></a>
                </div>

                <!-- <div class="update-clear">
                    <a class="btn btn-clear" href="#">Clear Shopping Cart</a>
                    <a class="btn btn-update" href="#">Update Shopping Cart</a>
                </div> -->
            </div>

            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Most Viewed Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                        data-loop="false" data-nav="true" data-dots="false"
                        data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>




                        @foreach($products as $product)

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{asset($product->image)}}" width="214" height="214"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="function-link">quick view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>{{$product->name}}</span></a>
                                <div class="wrap-price"><ins>
                                        <p class="product-price">{{$product->price}}</p>
                                    </ins> <del>
                                        <p class="product-price">{{$product->price + $product->discount}}</p>
                                    </del></div>
                            </div>
                        </div>

                        @endforeach


                    </div>
                </div>
                <!--End wrap-products-->
            </div>

        </div>
        <!--end main content area-->
    </div>
    <!--end container-->

</main>
<!--main area-->
<!--  -->
<!--main area-->

@endsection