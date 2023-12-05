@extends('layouts.master')
@section('title')
    Change password
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
                                <form method="post" action="{{'/change_password'}}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label>Current Password <span class="required">*</span></label>
                                            <input required="" class="form-control square" name="password"
                                                   type="password" placeholder="Password">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>New Password <span class="required">*</span></label>
                                            <input required="" class="form-control square" name="new_password"
                                                   type="password" placeholder="New Password">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Confirm Password <span class="required">*</span></label>
                                            <input required="" class="form-control square"
                                                   name="new_password_confirmation" type="password"
                                                   placeholder="Confirm Password">
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
