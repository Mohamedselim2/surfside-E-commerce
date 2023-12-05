@extends('layouts/master')
@section('title')
    Search
@endsection
@section('content')
    <section class="product-tabs section-padding position-relative wow fadeIn animated">
        <div class="container">
            <!--End nav-tabs-->
            <h4 style="margin-bottom: 10px"> <span style="color: #e76d0a">{{$req['query']}}</span> results:</h4>
            <div class="tab-content wow fadeIn animated" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-two" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">
                        @foreach($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/detail/{{$product['id']}}">
                                                <img class="default-img" src="{{$product['photo1']}}" alt="">
                                                <img class="hover-img" src="{{$product['photo2']}}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="View" class="action-btn hover-up" href="/detail/{{$product['id']}}"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#"><i class="fi-rs-heart"></i></a>
                                            {{--                                        <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>--}}
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">{{$product['category']}}</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <h2><a href="/detail/{{$product['id']}}">{{$product['name']}}</a></h2>
                                        <div class="product-price">
                                            <span>${{$product['price']}} </span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/AddCart/{{$product['id']}}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
