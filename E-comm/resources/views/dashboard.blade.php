@extends('layouts/master')
@section('title')
    User Dashboard
@endsection
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="row">
                <div class="col-md-4">
                    <div class="dashboard-menu">
                        <ul class="nav flex-column" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                            </li>
                            @if(session()->get('user')['state']=='user')
                            <li class="nav-item">
                                <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-user mr-10"></i>Account details</a>
                            </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab"
                                       aria-controls="orders" aria-selected="false"><i
                                            class="fi-rs-shopping-bag mr-10"></i>Add Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="msg-tab" data-bs-toggle="tab" href="#msg" role="tab"
                                       aria-controls="msg" aria-selected="true"><i class="fi-rs-user mr-10"></i>Customer
                                        messages</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" id="password-tab" data-bs-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="true"><i class="fi-rs-user mr-10"></i>Change Password</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{'logout'}}"><i class="fi-rs-sign-out mr-10"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content dashboard-content">
                        <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Hello {{session()->get('user')['name']}}! </h5>
                                </div>
                                <div class="card-body">
                                    @if(session()->get('user')['state']=='user')
                                        <p>From your account dashboard. you can easily check &amp; view your <a href="#">Recent Orders</a>, manage your <a href="#">Private Data</a> and <a href="#">Edit Your Password .</a></p>
                                    @else
                                        <p>From the dashboard you can easily check  <a href="#">Customer Messages </a>&amp; Add any <a href="#">Product</a> and <a href="#">change your password .</a></p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if(session()->get('user')['state']=='user')
                        <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Your Orders</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>User Name</th>
{{--                                                <th>Actions</th>--}}
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->date}}</td>
                                                <td>{{$order->user_name}}</td>
{{--                                                <td><a href="order/{{$order->id}}" class="btn-small d-block">View</a></td>--}}
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Account Details</h5>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{'/profile'}}">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Name <span class="required">*</span></label>
                                                <input required="" class="form-control square" name="name" type="text" value="{{session()->get('user')['name']}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Phone <span class="required">*</span></label>
                                                <input required="" class="form-control square" name="phone" type="text" value="0{{session()->get('user')['phone']}}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Address <span class="required">*</span></label>
                                                <input required="" class="form-control square" name="address" type="text" placeholder="Address" value="{{session()->get('user')['address']}}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Current Password <span class="required">*</span></label>
                                                <input required="" class="form-control square" name="password" type="password" placeholder="Password">
                                            </div>

                                            <div class="col-md-12">
                                                <button class="submit submit-auto-width" type="submit" style="margin-left: 230px">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @else
                            <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Your Orders</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="col-md-6">
                                                <div class="mb-25" >
                                                    <h4>Product Details</h4>
                                                </div>
                                                <form method="post" action="/admin">
                                                    @csrf
                                                    <div class="form-group" >
                                                        <input type="text"  required name="name" placeholder="Product name *">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="category" required placeholder="Category *">
                                                    </div>
                                                    <div class="form-group">
                                                        <input required type="text" name="price" placeholder="Price *">
                                                    </div>
                                                    <div class="form-group">
                                                        <input required type="text" name="description" placeholder="Description *">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="photo1" required placeholder="First Photo *">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="photo2" required placeholder="Second Photo *">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="quantity" required placeholder="Quantity *">
                                                    </div>
                                                    <button type="submit" class="btn btn-fill-out btn-block hover-up">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="msg" role="tabpanel" aria-labelledby="msg-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Customer messages</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>email</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($msgs as $msg)
                                                    <tr>
                                                        <td>{{$msg->user->name}}</td>
                                                        <td>{{$msg->date}}</td>
                                                        <td>{{$msg->user->email}}</td>
                                                        <td><a href="message/{{$msg->id}}" class="btn-small d-block">View</a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Change Password</h5>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{'/change_password'}}">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label>Current Password <span class="required">*</span></label>
                                                <input required="" class="form-control square" name="password" type="password" placeholder="Password">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>New Password <span class="required">*</span></label>
                                                <input  required="" class="form-control square" name="new_password" type="password" placeholder="New Password">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Confirm Password <span class="required">*</span></label>
                                                <input  required="" class="form-control square" name="new_password_confirmation" type="password" placeholder="Confirm Password">
                                            </div>
                                            <div class="col-md-12">
                                                <button class="submit submit-auto-width" type="submit" style="margin-left: 230px">Save</button>
                                            </div>
                                        </div>
                                    </form>
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
