@extends('includes.main')

@section('css')

@endsection

@section('content')


<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide" dir="ltr">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true"
                data-dots="false">
               
                @foreach($products_latest3 as $product)

                <div class="item-slide">
                    <img src="{{asset($product->image)}}" style="width:1170px; height:500px" alt="" class="img-slide">
                    <div class="slide-info slide-2">
                        <h2 class="f-title">Extra {{$product->discount}}% Off</h2>
                        <span class="f-subtitle">On online payments</span>
                        <p class="discount-code">Use Code: #FA6868</p>
                        <h4 class="s-title">Get Free</h4>
                        <p class="s-subtitle">TRansparent Bra Straps</p>
                    </div>
                </div>
                @endforeach

               
            </div>
        </div>

        <!--BANNER-->
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="assets/images/home-1-banner-1.jpg" alt="" width="580" height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="assets/images/home-1-banner-2.jpg" alt="" width="580" height="190"></figure>
                </a>
            </div>
        </div>

        <!--On Sale-->
        <div class="wrap-show-advance-info-box style-1 has-countdown" dir="ltr">
            <h3 class="title-box">On Sale</h3>
            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="10"
                data-loop="false" data-nav="true" data-dots="false"
                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                @foreach($products as $product)
                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="{{route('Product.detail',$product->id)}}"
                            title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="{{asset($product->image)}}" style="width:200px;height:200px"
                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="{{route('Product.detail',$product->id)}}" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name">
                            <span style=" max-width: 20ch; overflow: hidden; white-space:nowrap">
                                {{$product->description}}
                            </span> </a>
                        <div class="wrap-price"><span class="product-price">${{ number_format($product->price, 2) }}</span></div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">{{__('home.latest_pro')}}</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="assets/images/digital-electronic-banner.jpg" width="1170" height="240" alt="">
                    </figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>


                                @foreach($products_latest as $product_lst)

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{route('Product.detail',$product_lst->id)}}"
                                            title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="{{asset($product_lst->image)}}"
                                                    style="width:200px;height:200px"
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
                                        <a href="#" class="product-name">
                                            <span style=" max-width: 20ch; overflow: hidden; white-space:nowrap">
                                                {{$product_lst->description}}
                                            </span> </a>
                                        <div class="wrap-price"><span
                                                class="product-price">${{ number_format($product->price, 2) }}</span></div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Product Categories-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Product Categories</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="assets/images/fashion-accesories-banner.jpg" width="1170" height="240" alt="">
                    </figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">

                        <a href="#fashion_1{{$OnCat_Fst->id}}" class="tab-control-item active">{{$OnCat_Fst->name}}</a>

                        @foreach($Category_Fst as $cat)
                        <a href="#fashion_1a{{$cat->id}}" class="tab-control-item">{{$cat->name}}</a>

                        @endforeach
                    </div>
                    <div class="tab-contents">

                        <div class="tab-content-item active" id="fashion_1{{$OnCat_Fst->id}}">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach($OnCat_Fst->products as $product)
                                <div class="product product-style-2 equal-elem ">

                                    <div class="product-thumnail">
                                        <a href="{{route('Product.detail',$product->id)}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="{{asset($product->image)}}" width="800" height="800"
                                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item sale-label">${{ number_format($product->price, 2) }}</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="{{route('Product.detail',$product->id)}}" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    
                                    <div class="product-info">
                                        <a href="{{route('Product.detail',$product->id)}}" class="product-name"><span>{{$product->name}}</span></a>
                                        <div class="wrap-price"><ins>
                                                <p class="product-price">${{$product->price}}</p>
                                            </ins> <del>
                                                <p class="product-price">$250.00</p>
                                            </del></div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>

                        @foreach($Category_Fst as $cat)
                     

                        <div class="tab-content-item" id="fashion_1a{{$cat->id}}">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                                @foreach($cat->products as $pro)
                                <div class="product product-style-2 equal-elem ">

                                    <div class="product-thumnail">
                                        <a href="{{route('Product.detail',$product->id)}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="{{asset($pro->image)}}" width="800"
                                                    height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item sale-label">sale</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="{{route('Product.detail',$product->id)}}" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{route('Product.detail',$product->id)}}" class="product-name"><span>{{$pro->name}}</span></a>
                                        <div class="wrap-price"><ins>
                                                <p class="product-price">${{ number_format($product->price, 2) }}</p>
                                            </ins> <del>
                                                <p class="product-price">$250.00</p>
                                            </del></div>
                                    </div>
                                </div>
                                @endforeach
                               

                                

                            </div>
                        </div>
                
                        @endforeach






                    </div>
                </div>
            </div>
        </div>

    </div>

</main>

@endsection


@section('js')


@endsection