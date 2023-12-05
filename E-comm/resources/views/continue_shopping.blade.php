@extends('layouts/master')
@section('title')
    Continue Shopping..
@endsection
@section('content')
<br>
    <div class="container">
        <div class="row"STYLE="margin-left: 350px">
            <div class="col-md-6">
                <div class="mb-25" >
                    <h4>Billing Details</h4>
                </div>
                <form method="post" action="{{'/continue_shopping'}}">
                    @csrf
                    <div class="form-group" >
                        <input type="text"  required name="name" value="{{session()->get('user')['name']}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" required placeholder="Address *" value="{{session()->get('user')['address']}}">
                    </div>
                    <div class="form-group">
                        <input required type="text" name="phone" placeholder="Phone *" value="0{{session()->get('user')['phone']}}">
                    </div>
                    <div class="form-group mb-30" >
                        <textarea type="text" name="note" placeholder="Order notes"></textarea>
                    </div>
                    <div class="col-md-6" >
                        <div class="payment_method">
                            <div class="mb-25">
                                <h5>Payment</h5>
                            </div>
                            <div class="payment_option">
                                <div class="custome-radio">
                                    <input class="form-check-input" required type="radio" name="payment" value="cash" id="exampleRadios3">
                                    <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#cashOnDelivery" aria-controls="cashOnDelivery">Cash On Delivery</label>
                                </div>
                                <div class="custome-radio">
{{--                                    <input class="form-check-input" required="" type="radio" name="payment" value="card" id="exampleRadios4">--}}
                                    <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#cardPayment" aria-controls="cardPayment"><s>Card Payment</s></label>
                                </div>
                                <div class="custome-radio">
{{--                                    <input class="form-check-input" required="" type="radio" name="payment" value="paypal" id="exampleRadios5">--}}
                                    <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal"><s>Paypal</s></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="submit submit-auto-width" type="submit">Make an order</button>
            </form>
        </div>
    </div>
    <br>
@endsection
