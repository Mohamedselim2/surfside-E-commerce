@extends('layouts/master')
@section('title')
    Message
@endsection
@section('content')
<br>
    <div class="container" style="max-width: 690px;">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Customer message</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <h5>From:{{$msg->user->name}}</h5>
                                <h6>{{$msg->user->email}}</h6>
                                <br>
                                <p style="text-align: center; font-size: 20px">{{$msg->message}}</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

@endsection
