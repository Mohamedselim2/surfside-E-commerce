@extends('layouts/master')
@section('title')
    Cart List
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
                                <th scope="col">Quantity</th>
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
                                <td class="text-center" data-title="Stock">
                                    <form method="post" action="cart/{{$product->id}}">
                                        @csrf
                                            <button type="submit" name="quantity" value="{{($product->pivot->quantity)-1}}"  style="transform: scale(0.7);font-size: 14px; padding: 5px 10px;"><i class="fi-rs-angle-small-down"></i></button>
                                            <span class="qty-val">{{($product->pivot->quantity)}}</span>
                                            <button type="submit" name="quantity" value="{{($product->pivot->quantity)+1}}" style="transform: scale(0.7);font-size: 14px; padding: 5px 10px;"><i class="fi-rs-angle-small-up"></i></button>
                                    </form>
                                </td>
                                 <td class="action" data-title="Remove"><a href="cart_delete/{{$product->id}}" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="cart-action text-end">
                    <a class="btn  mr-10 mb-sm-15" href="{{'ClearCart'}}"><i class="fi-rs-shuffle mr-10"></i>Clear The Cart</a>
                    <a class="btn  mr-10 mb-sm-15" href="{{'continue_shopping'}}"><i class="fi-rs-shopping-bag mr-10" ></i>Continue Shopping</a>
                </div>
                <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
            </div>
        </div>
    </div>
@endsection
