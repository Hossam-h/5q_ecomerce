@extends('includes.main')

@section('content')

<!--main area-->
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>detail</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-media">
                        <div class="product-gallery">
                            <ul class="slides">



                                <li data-thumb="{{asset($product->image)}}" style="list-style:none">
                                    <img src="{{asset($product->image)}}" alt="product thumbnail" />
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="detail-info">
                        <div class="product-rating">
                            <!-- <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i> -->
                            <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                            <a href="#" class="count-review">(05 review)</a>
                        </div>
                        <h2 class="product-name">Radiant-360 R6 Wireless Omnidirectional Speaker [White]</h2>


                        <div class="wrap-price"><span class="product-price">${{$product->price}}</span></div>
                        <div class="stock-info in-stock">
                            <p class="availability">Availability: <b>In Stock</b></p>
                        </div>
                        @if($cart->where('id',$product->id)->count())

                        <div>
                            <span class="btn btn-primary">
                                This item already item in card
                            </span>
                        </div>
                        @else

                        <form action="{{route('cart.create')}}" method="post">

                            @csrf

                            <div class="quantity">
                                <span>Quantity:</span>
                                <div class="quantity-input">
                                    <input type="number" name="product_qt" value="1" data-max="120" pattern="[0-9]*">
                                    <a class="btn btn-reduce" href="#"></a>
                                    <a class="btn btn-increase" href="#"></a>
                                </div>
                            </div>
                            <div class="wrap-butons">

                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="name" value="{{$product->name}}">
                                <input type="hidden" name="price" value="{{$product->price}}">

                                <button type="submit" class="btn add-to-cart">Add to Cart</button>
                        </form>

                        @endif
                        <div class="wrap-btn">
                            <a href="#" class="btn btn-wishlist">Add Wishlist</a>
                        </div>
                    </div>
                </div>
                <div class="advance-info">
                    <div class="tab-control normal">
                        <a href="#description" class="tab-control-item active">description</a>
                        <a href="#review" class="tab-control-item">Reviews</a>
                    </div>
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="description">
                            <p>
                                {{$product->getTranslation('description','en')}}
                            </p>
                        </div>
                        
                        <div class="tab-content-item " id="review">

                            <div class="wrap-review-form">

                                <div id="comments">
                                    <h2 class="woocommerce-Reviews-title">Reviewes for <span>{{$product->name}} </span></h2>
                                    <ol class="commentlist">
                                        @foreach($Reviews as $review)
                                        <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                            id="li-comment-20">

                                            <div id="comment-20" class="comment_container">
                                                <div class="comment-text">
                                                    <div class="">
                                                <div>
                                                @if( $review->rating == 1)
                                                <img src="{{asset('uploads/stars/1.jpg')}}" alt="" srcset=""> <br>
                                                @elseif( $review->rating == 2)
                                                <img src="{{asset('uploads/stars/2.jpg')}}" alt="" srcset=""> <br>
                                                @elseif( $review->rating ==3)
                                                <img src="{{asset('uploads/stars/3.jpg')}}" alt="" srcset=""> <br>
                                                @elseif( $review->rating == 4)
                                                <img src="{{asset('uploads/stars/4.jpg')}}" alt="" srcset=""> <br>
                                                @else
                                                <img src="{{asset('uploads/stars/5.jpg')}}" alt="" srcset=""> <br>

                                                @endif

                                                </div>
                                                    
                                                    </div>
                                                    <p class="meta">
                                                        <strong
                                                            class="woocommerce-review__author">{{$review->user->name}}</strong>
                                                        <span class="woocommerce-review__dash">–</span>
                                                        <time class="woocommerce-review__published-date"
                                                            datetime="2008-02-14 20:00">{{date('d-m-Y', strtotime($review->created_at));}}</time>
                                                    </p>
                                                    <div class="description">
                                                        <p>{{$review->comment}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ol>
                                </div><!-- #comments -->

                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">

                                            <form action="{{route('review.create')}}" method="post" id="commentform"
                                                class="comment-form" novalidate="">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$product->id}}">

                                                <div class="comment-form-rating">


                                                    <span>Your rating</span>
                                                    <p class="stars">
                                                        <input type="hidden" name="fi_rate" id="finale_rate" required>

                                                        <label for="rated-1"></label>
                                                        <input type="radio" id="rated-1" name="rating" value="1">
                                                        <label for="rated-2"></label>
                                                        <input type="radio" id="rated-2" name="rating" value="2">
                                                        <label for="rated-3"></label>
                                                        <input type="radio" id="rated-3" name="rating" value="3">
                                                        <label for="rated-4"></label>
                                                        <input type="radio" id="rated-4" name="rating" value="4">
                                                        <label for="rated-5"></label>
                                                        <input type="radio" id="rated-5" name="rating" value="5"
                                                            checked="checked">

                                                    </p>
                                                </div>

                                                <p class="comment-form-comment">
                                                    <label for="comment">Your review <span class="required">*</span>
                                                    </label>
                                                    <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                                                </p>

                                                <p class="form-submit">
                                                    <input name="submit" type="submit" id="submit" class="submit"
                                                        value="Submit">
                                                </p>
                                            </form>

                                        </div><!-- .comment-respond-->
                                    </div><!-- #review_form -->
                                </div><!-- #review_form_wrapper -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end main products area-->

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
            <div class="widget widget-our-services ">
                <div class="widget-content">
                    <ul class="our-services">

                        <li class="service">
                            <a class="link-to-service" href="#">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                                <div class="right-content">
                                    <b class="title">Fast and high quality delivery</b>
                                    <p class="desc">Our company makes delivery all over the country</p>
                                </div>
                            </a>
                        </li>

                        <li class="service">
                            <a class="link-to-service" href="#">
                                <i class="fa fa-gift" aria-hidden="true"></i>
                                <div class="right-content">
                                    <b class="title">Quality assurance and service</b>
                                    <p class="desc">We offer only those goods, in which quality we are sure</p>
                                </div>
                            </a>
                        </li>

                        <li class="service">
                            <a class="link-to-service" href="#">
                                <i class="fa fa-reply" aria-hidden="true"></i>
                                <div class="right-content">
                                    <b class="title">Order Return</b>
                                    <span class="subtitle">Returns within 30 days</span>
                                    <p class="desc">You have 30 days to test your purchase</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!-- Categories widget-->
        </div>
        <!--end sitebar-->
    </div>
    <!--end row-->

    </div>
    <!--end container-->

</main>

@endsection
@section('js')
<script>
// var postBoxes = document.querySelectorAll('#rated')
// postBoxes.forEach(function(postBox) {

//     postBox.addEventListener('click', function() {
//         //var postId = this.getAttribute('post-id')
//         console.log(1);
//     })
// })


var postBoxes = document.getElementsByName('rating')
postBoxes.forEach(ele => {
    let i = 1;
    ele.addEventListener('click', function() {
        i = this.value
        document.getElementById('finale_rate').value = i

        console.log(document.getElementById('finale_rate').value)
    })

})
</script>

@endsection