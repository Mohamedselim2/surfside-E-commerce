@extends('layouts.master')
@section('title')
    Your Profile
@endsection
@section('content')
    <br>
    <div class="container" style="margin-bottom: 5px ; margin-left: 250px">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="row">
                    <div class="col-md-8">
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
                                            <input required="" class="form-control square" name="name" type="text"
                                                   value="{{session()->get('user')['name']}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Phone <span class="required">*</span></label>
                                            <input required="" class="form-control square" name="phone" type="text"
                                                   value="0{{session()->get('user')['phone']}}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Address <span class="required">*</span></label>
                                            <input required="" class="form-control square" name="address" type="text"
                                                   placeholder="Address" value="{{session()->get('user')['address']}}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Current Password <span class="required">*</span></label>
                                            <input required="" class="form-control square" name="password"
                                                   type="password" placeholder="Password">
                                        </div>

                                        <div class="col-md-12">
                                            <button class="submit submit-auto-width" type="submit"
                                                    style="margin-left: 230px">Save
                                            </button>
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
    <br>
@endsection
