@extends('layouts/master')
@section('title')
    Wish List
@endsection
@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table shopping-summery text-center clean">

                        <thead>
                        <tr class="main-heading">
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td class="image"><img src="{{$product->photo1}}" alt="#"></td>
                                <td class="product-des">
                                    <h5 class="product-name"><a href="/detail/{{$product['id']}}">{{$product->name}} </a></h5>
                                    <p class="font-xs">{{$product->description}}</p>
                                </td>
                                <td class="price" data-title="Price"><span>${{$product->price}} </span></td>
                                <td class="action" data-title="Remove"><a href="wish_delete/{{$product->id}}" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="cart-action text-end">
                    <a class="btn  mr-10 mb-sm-15" href="{{'ClearWishes'}}"><i class="fi-rs-shuffle mr-10"></i>Clear The Wishes</a>
                </div>
                <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
            </div>
        </div>
    </div>
@endsection
