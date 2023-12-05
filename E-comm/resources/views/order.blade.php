@extends('layouts/master')
@section('title')
    Your order
@endsection
@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{'/'}}" rel="nofollow">Home</a>
                <span></span>  Your Order
            </div>
        </div>
    </div>
    <br>
    <div class="container" style="margin-left:420px ">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="row">
                    <div class="col-md-4">
                        <div class="tab-content dashboard-content">
                            <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Order name: {{$order->user_name}}! </h5>
                                    </div>
                                    <div class="card-body">
                                            <p>From your account dashboard. you can easily check &amp; view your <a href="#">Recent Orders</a>, manage your <a href="#">Private Data</a> and <a href="#">Edit Your Password .</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
