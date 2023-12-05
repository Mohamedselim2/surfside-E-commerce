@extends('layouts/master')
@section('title')
    Contact Us
@endsection
@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{'/'}}" rel="nofollow">Home</a>
                <span></span> Contact us
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 m-auto">
                <div class="contact-from-area padding-20-row-col wow FadeInUp">
                    <h3 class="mb-10 text-center">Drop Us a Message :D</h3>
                    <p class="text-muted mb-30 text-center font-sm">We will replay to a message as soon as possible.</p>
                    <form class="contact-form-style text-center" id="contact-form" method="post" action="{{'/contact'}}" >
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="textarea-style mb-30">
                                    <textarea type="text" required="" name="message" placeholder="Message"></textarea>
                                </div>
                                <button class="submit submit-auto-width" type="submit">Send message</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
@endsection
