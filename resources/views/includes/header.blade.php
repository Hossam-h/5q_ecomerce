<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels"></div>
</div>


<!--header-->
<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu left-menu">
                        <ul>
                            <li class="menu-item">
                                <a title="Hotline: (+123) 456 789" href="javascript:void(0);"><span
                                        class="icon label-before fa fa-mobile"></span>Hotline: 01060473720</a>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-menu right-menu">
                        <ul>
                            <li class="menu-item"><a title="Register or Login"
                                    href="{{url('/dashboar_admin')}}">{{__('dashboard.dashboard')}}</a></li>

                            @if(!Auth::user())
                            <li class="menu-item"><a title="Register or Login"
                                    href="{{route('login')}}">{{__('login.login')}}</a></li>
                            <li class="menu-item"><a title="Register or Login"
                                    href="{{route('register')}}">{{__('login.register')}}</a>
                            </li>
                            @endif
                            @if(Auth::user())

                            <li class="menu-item">

                                <a class="dropdown-item" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
				                 document.getElementById('logout-form').submit();">
                                    {{__('login.logout')}}
                                </a>

                                <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                            @endif


                            <li class="menu-item lang-menu menu-item-has-children parent">
                                <a title="English" href="#"><span class="img label-before"><img
                                            src="{{asset('assets/images/lang-en.png')}}"
                                            alt="lang-en"></span>{{App::getLocale()}}<i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                                <ul class="submenu lang">

                                    <ul>
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode =>
                                        $properties)
                                        <li>
                                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </ul>
                            </li>
                            <!-- <li class="menu-item menu-item-has-children parent">
                                <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                                <ul class="submenu curency">

                                    <li class="menu-item">
                                        <a title="Pound (GBP)" href="#">Pound (GBP)</a>
                                    </li>

                                    <li class="menu-item">
                                        <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                                    </li>

                                    <li class="menu-item">
                                        <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                                    </li>

                                </ul>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mid-section main-info-area">

                    <div class="wrap-logo-top left-section">
                        <a href="{{route('home')}}" class="link-to-home"><img
                                src="{{asset('assets/images/logo-top-1.png')}}" alt="mercado">
                        </a>
                    </div>

                    <div class="wrap-search center-section">
                        <div class="wrap-search-form">
                            <form action="{{route('shoping.search')}}" id="form-search-top">
                                <input type="text" name="search" value="" placeholder="Search here...">
                                <button form="form-search-top" type="submit"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                                <div class="wrap-list-cate" style="width:100%" >
                                    <ul class="list-cate"  name="select_product">
                                       
                                    </ul>
                                   
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="wrap-icon right-section">
                        <!-- item in card -->
                        <div class="wrap-icon-section minicart">
                            <a href="{{route('cart.index')}}" class="link-direction">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span class="index"> {{Cart::count()}} items</span>
                                    <span class="title">CART</span>
                                </div>
                            </a>
                        </div>
                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="nav-section header-sticky">
                <!--  -->

                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                            <li class="menu-item home-icon">
                                <a href="{{route('home')}}" class="link-term mercado-item-title"><i class="fa fa-home"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li class="menu-item">
                                <a href="about-us.html"
                                    class="link-term mercado-item-title">{{__('header.about_us')}}</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('shoping.index')}}"
                                    class="link-term mercado-item-title">{{__('header.shop')}}</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('cart.index')}}"
                                    class="link-term mercado-item-title">{{__('CART')}}</a>
                            </li>
                            <li class="menu-item">
                                <a href="checkout.html" class="link-term mercado-item-title">Checkout</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('Contact.index')}}"
                                    class="link-term mercado-item-title">{{__('header.connact')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>