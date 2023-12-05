<?php
    use App\Http\Controllers\CartController;
    use App\Http\Controllers\WishController;

if(session()->has('user'))
    {
        $cart = new CartController();
        $num=$cart->num_of_cart_prod();

        $wish= new WishController();
        $wnum=$wish->num_of_wish_prod();

    }
?>
@if( request()->path()!='login'  && request()->path()!='register' )
<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">

                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>Get great devices up to 50% off <a href="{{'/'}}">Shop now</a></li>
                                <li>Supper Value Deals - Save more with coupons</li>
                                <li>Trendy 25silver jewelry, save up 35% off today <a href="{{'/'}}">Shop now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    @if(!session()->has('user'))
                    <div class="header-info header-info-right">
                        <ul>
                            <li><i class="fi-rs-key"></i><a href="{{'/login'}}">Log In </a>  / <a href="{{'/register'}}">Sign Up</a></li>
                        </ul>
                    </div>
                    @else
                        <div class="header-info header-info-right">
                            <ul>
                                <li><i class="fi-rs-key"></i><a href="{{'/logout'}}">Logout </a>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="/"><img src="{{ asset('import/assets/imgs/logo/logo.png') }}" alt="logo"></a>
                </div>
                <div class="header-right">
                    <div class="search-style-1">
                        <form action="{{'/search'}}">
                            <input type="text" placeholder="Search..." name="query">
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            @if(session()->has('user') && session()->get('user')['state']=='user' && (session()->get('user')['state']=='user'))
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{route('cart')}}">
                                    <img alt="Surfside Media" src="{{ asset('import/assets/imgs/theme/icons/icon-cart.svg') }}">
                                    <span class="pro-count blue">{{$num}}</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a href="{{'/wishes'}}">
                                    <img class="svgInject" alt="Surfside Media" src="{{ asset('import/assets/imgs/theme/icons/icon-heart.svg') }}">
                                    <span class="pro-count blue">{{$wnum}}</span>
                                </a>
                            </div>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="/"><img src="{{ asset('import/assets/imgs/logo/logo.png')}}" alt="logo"></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categori-button-active" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
{{--                        <div class="categori-dropdown-wrap categori-dropdown-active-large">--}}
{{--                            <ul>--}}


{{--                                <li class="has-children">--}}
{{--                                    <a href="shop.html"><i class="surfsidemedia-font-smartphone"></i> Cellphones</a>--}}
{{--                                    <div class="dropdown-menu">--}}
{{--                                        <ul class="mega-menu d-lg-flex">--}}
{{--                                            <li class="mega-menu-col col-lg-7">--}}
{{--                                                <ul class="d-lg-flex">--}}
{{--                                                    <li class="mega-menu-col col-lg-6">--}}
{{--                                                        <ul>--}}
{{--                                                            <li><span class="submenu-title">Hot & Trending</span></li>--}}
{{--                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Cellphones</a></li>--}}
{{--                                                            <li><a class="dropdown-item nav-link nav_item" href="#">iPhones</a></li>--}}
{{--                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Refurbished Phones</a></li>--}}
{{--                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Mobile Phone</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mega-menu-col col-lg-6">--}}
{{--                                                        <ul>--}}
{{--                                                            <li><span class="submenu-title">Accessories</span></li>--}}
{{--                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Screen Protectors</a></li>--}}
{{--                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Wire Chargers</a></li>--}}
{{--                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Wireless Chargers</a></li>--}}
{{--                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Power Bank</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Computer & Office</a></li>--}}
{{--                                <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Consumer Electronics</a></li>--}}
{{--                                <li>--}}
{{--                                    <ul class="more_slide_open" style="display: none;">--}}
{{--                                        <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Headset</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <div class="more_categories">Show more...</div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>
                                <li><a class="active" href="/">Home </a></li>
{{--                                <li><a href="about.html">About</a></li>--}}
                                @if(session()->has('user')&&session()->get('user')['state']=='user'|| !session()->has('user'))
                                <li><a href="{{'/contact'}}">Contact Us</a></li>
                                @endif
                                @if(session()->has('user'))
                                    <li><a >{{session()->get('user')['name']}}<i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            @if(session()->get('user')['state']=='user')
                                            <li><a href="{{'/dashboard'}}">Dashboard</a></li>
                                            <li><a href="#">Orders</a></li>
                                            @else
                                                <li><a href="{{'/admin'}}">Dashboard</a></li>
                                            @endif
                                            <li><a href="{{'/logout'}}">Logout</a></li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="index.html"><img src="{{ asset('import/assets/imgs/logo/logo.png')}}" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="/search">
                    <input type="text" placeholder="Search of products…" name="query">
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <div class="main-categori-wrap mobile-header-border">
                    <a class="categori-button-active-2" href="#">
                        <span class="fi-rs-apps"></span> Browse Categories
                    </a>
                    <div class="categori-dropdown-wrap categori-dropdown-active-small">
                        <ul>
                            <li><a href="shop.html"><i class="surfsidemedia-font-dress"></i>Women's Clothing</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-tshirt"></i>Men's Clothing</a></li>
                            <li> <a href="shop.html"><i class="surfsidemedia-font-smartphone"></i> Cellphones</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Computer & Office</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Consumer Electronics</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Home & Garden</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-high-heels"></i>Shoes</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-teddy-bear"></i>Mother & Kids</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-kite"></i>Outdoor fun</a></li>
                        </ul>
                    </div>
                </div>
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="{{'/'}}">Home</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="shop.html">shop</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Our Collections</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Women's Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Dresses</a></li>
                                        <li><a href="product-details.html">Blouses & Shirts</a></li>
                                        <li><a href="product-details.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="product-details.html">Women's Sets</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Men's Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Jackets</a></li>
                                        <li><a href="product-details.html">Casual Faux Leather</a></li>
                                        <li><a href="product-details.html">Genuine Leather</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Technology</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Gaming Laptops</a></li>
                                        <li><a href="product-details.html">Ultraslim Laptops</a></li>
                                        <li><a href="product-details.html">Tablets</a></li>
                                        <li><a href="product-details.html">Laptop Accessories</a></li>
                                        <li><a href="product-details.html">Tablet Accessories</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info mt-30">
                    <a href="contact.html"> Our location </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="login.html">Log In </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="register.html">Sign Up</a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="#">(+1) 0000-000-000 </a>
                </div>
            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">Follow Us</h5>
                <a href="#"><img src="{{ asset('import/assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                <a href="#"><img src="{{ asset('import/assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                <a href="#"><img src="{{ asset('import/assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                <a href="#"><img src="{{ asset('import/assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                <a href="#"><img src="{{ asset('import/assets/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
            </div>
        </div>
    </div>
</div>
@endif
