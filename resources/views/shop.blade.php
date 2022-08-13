@extends('includes.main')

@section('css')
<style>
.pagination>li {
    display: inline-block !important;
    margin-left: 8px;
}
</style>
@endsection
@section('content')

<!--main area-->
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{route('home')}}" class="link">home</a></li>
                <li class="item-link"><span>DENTAL PRODUCTS</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <div class="banner-shop">
                    <a href="#" class="banner-link">
                        <figure><img src="assets/images/shop-banner.jpg" alt=""></figure>
                    </a>
                </div>

                <div class="wrap-shop-control">

                    <h1 class="shop-title">DENTAL PRODUCTS</h1>



                </div>
                <!--end wrap shop control-->

                <div class="row">

                    <ul class="product-list grid-products equal-container">
                        @if(!empty($products) && $products->count())
                        @foreach($products as $product)
                        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="product product-style-3 equal-elem">
                                <div class="product-thumnail">
                                    <a href="{{route('Product.detail',$product->id)}}"
                                        title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{asset($product->image)}}" style="height:200px; width:200px"
                                                alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="{{route('Product.detail',$product->id)}}" class="product-name"
                                        style="dispaly:inline-block"><span
                                            style="max-width: 27ch; overflow: hidden; white-space:nowrap">{{$product->name}}</span>
                                        <span></span> </a>
                                    <div class="wrap-price"><span class="product-price">${{$product->price}}</span>
                                    </div>


                                    <a href="{{route('Product.detail',$product->id)}}" class="btn add-to-cart">Add To
                                        Cart</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        @endif

                    </ul>

                </div>

                {!! $products->links() !!}

                <!-- <div class="wrap-pagination-info">
                    <ul class="page-numbers">
                        <li><span class="page-number-item current">1</span></li>
                        <li><a class="page-number-item" href="#">2</a></li>
                        <li><a class="page-number-item" href="#">3</a></li>
                        <li><a class="page-number-item next-link" href="#">Next</a></li>
                    </ul>
                    <p class="result-count">Showing 1-8 of 12 result</p>
                </div> -->
            </div>
            <!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">


                <div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title">All Categories</h2>
                    <div class="widget-content">
                        @foreach($categories as $category)

                        <ul class="list-category">

                            <li class="category-item has-child-cate">
                                <a href="javascript:void(0);" class="cate-link">{{$category->name}}</a>
                                <span class="toggle-control">+</span>
                                <ul class="sub-cate">

                                    @foreach($category->products as $product)
                                    <li class="category-item"><a href="{{route('Product.detail',$product->id)}}"
                                            class="cate-link">{{$product->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>

                        </ul>
                        @endforeach

                    </div>
                </div>

                <!-- Categories widget-->



                <div class="widget mercado-widget widget-product">
                    <h2 class="widget-title">Popular Products</h2>
                    <div class="widget-content">
                        <ul class="products">

                            @foreach($product_latest as $product)
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="detail.html"
                                            title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="{{asset($product->image)}}" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{route('Product.detail',$product->id)}}" class="product-name"><span>{{$product->name}}</span></a>
                                        <div class="wrap-price"><span class="product-price">{{$product->price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            @endforeach

                        </ul>
                    </div>
                </div><!-- brand widget-->

            </div>
            <!--end sitebar-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</main>
<!--main area-->

@endsection