@extends('layouts.app')

@section('css')
    <style>
        * {
            margin: 0;
        }

        .main {
            height: 100vh;
            background: #00001d;
            margin: 0;
        }
    </style>
@endsection

@section('content')
<div class="row justify-content-center align-items-center h-50">
    <div class="col-md-7 text-center">

        <div class="m-auto w-50 text-left pl-2">
            <h1 class="font-weight-bolder ml-0 pl-0">BurrsApp</h1>
            <h2 class="font-weight-bolder text-capitalize ml-0 pl-0">Free to use</h2>

            <div class="border-left-primary pl-3 mt-4">
                <h4>A save hospitable online environment that encourages anonymity and privacy.</h4>
                <h4>A wide range of easy-to-use features are available</h4>
            </div>

            <div class="d-flex justify-content-around mt-5">
                <a href="{{ url('register') }}" class="btn btn-primary  w-50">Register</a>
                <a href="{{ url('login') }}" class="btn btn-primary  w-50 ml-5">Login</a>
            </div>
        </div>
    </div>
        <div class="col-md-5">

        <div class="d-flex">
            <img src="{{ asset('img/header.png') }}" class="m-auto img-fluid" alt="head">
        </div>
    </div>
</div>
@endsection