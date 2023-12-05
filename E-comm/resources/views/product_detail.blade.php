@extends('layouts/master')
@section('title')
{{$product['name']}}
@endsection
@section('content')
<div class="page-header breadcrumb-wrap" style="margin-bottom: -40px;  background: white">
    <div class="container">
        <div class="breadcrumb">
            <a href="{{'/'}}" rel="nofollow">Home</a>
            <span></span> Products
            <span></span> {{$product['name']}}
        </div>
    </div>
</div>
<br>
<br>

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="product-detail accordion-detail">
                    <div class="row mb-50">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="{{$product['photo1']}}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{$product['photo2']}}" alt="product image">
                                    </figure>

                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails pl-15 pr-15">
                                    <div><img src="{{$product['photo1']}}" alt="product image"></div>
                                    <div><img src="{{$product['photo2']}}" alt="product image"></div>
                                </div>
                            </div>
                            <!-- End Gallery -->

                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info">
                                <h2 class="title-detail">{{$product['name']}}</h2>
                                <div class="product-detail-rating">
                                    <div class="pro-details-brand">
                                        <span> Brands: <a href="shop.html">apple</a></span>
                                    </div>

                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <ins><span class="text-brand">${{$product['price']}}</span></ins>
                                        <ins><span class="old-price font-md ml-15">$200.00</span></ins>
                                        <span class="save-price  font-md color3 ml-15">25% Off</span>
                                    </div>
                                </div>
                                <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                <div class="short-desc mb-30">
                                    <p>{{$product['description']}}</p>
                                    @if($product['quantity']<=5)
                                        <p style="color: red">Quantity:{{$product['quantity']}}</p>
                                    @endif
                                </div>
                                <div class="product_sort_info font-xs mb-30">
                                    <ul>
                                        <li class="mb-10"><i class="fi-rs-crown mr-5"></i> 1 Year AL Jazeera Brand Warranty</li>
                                        <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> 30 Day Return Policy</li>
                                        <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                    </ul>
                                </div>
                                <div class="attr-detail attr-color mb-15">
                                    <strong class="mr-10">Color</strong>
                                    <ul class="list-filter color-filter">
                                        <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
                                        <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
                                        <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                        <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                        <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                        <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
                                        <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
                                    </ul>
                                </div>

                                @if(session()->has('user')&&session()->get('user')['state']=='user' || !session()->has('user'))
                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="detail-extralink">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart">Add to cart</button>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
{{--<br><br><br><br><br><br><br>--}}
