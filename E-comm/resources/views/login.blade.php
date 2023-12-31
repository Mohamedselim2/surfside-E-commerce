@extends('layouts/master')
@section('title')
    Login
@endsection
@section('content')
    <section class="pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h3 class="mb-30">Login</h3>
                                    </div>
                                    <form method="post" action="/login">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" required="" name="email" placeholder="Enter Your Email">
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="password" name="password" placeholder="Enter The Password">
                                        </div>
                                        <div class="login_footer form-group">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                                    <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                                </div>
                                            </div>
                                            <a class="text-muted" href="#">Forgot password?</a>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Log in</button>
                                        </div>
                                        <div class="text-muted text-center">Don't have an account? <a href="{{'register'}}">Sign Up now</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-6">
                            <img src="{{ asset('import/assets/imgs/login.png') }}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
