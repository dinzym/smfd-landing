@extends('layout')
@section('content')

<!-- Home Header -->
<div class="justify-content-center position-relative">
    <div class="centered text-white text-center w-75">
        <h1>Your all in one hub for MFIII, MF+ and LABRMS <br>
            Discover endless possibilities with SmartMFDealers.</h1>
        <div class="row justify-content-around mt-5 w-50">
            <a href="/register" class="nav-link text-white text-center col-6" >
                <button type="button" class="btn text-success bg-white fw-bold fs-5 py-2 px-3">Register as a Dealer ></button>
            </a>
        </div>
    </div>
    <img src="{{ asset('img/home.png') }}" alt="home_background" class="img-fluid" style="width: 100%; height: 80%; object-fit: cover;">
</div>

<!-- Content Section -->
<div>
    <div class="container">
        <div class="row justify-content-start mb-2">
            <div class="col-md-6 text-center" style="margin-top:-50px">
                <img src="{{ asset('img/MF3 BRAND 1.png') }}" alt="MFIII" class="img-fluid">
                <img src="{{ asset('img/MFBRAND 1.png') }}" alt="MF+" class="img-fluid">
                <img src="{{ asset('img/LABRMS BRAND 1.png') }}" alt="LabRMS" class="img-fluid px-2">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <div class="d-flex mb-3">
                    <img src="{{ asset('img/bullet.png') }}" alt="bullet" class="img-fluid"  width="85%">
                    <!-- <p class="ms-3">Browse wide product selection.</p> -->
                </div>
                <!-- <div class="d-flex mb-3">
                    <img src="{{ asset('img/bullet.png') }}" alt="bullet" class="img-fluid" style="width: 30px; height: 30px;">
                    <p class="ms-3">Place orders easily on the app.</p>
                </div>
                <div class="d-flex mb-3">
                    <img src="{{ asset('img/bullet.png') }}" alt="bullet" class="img-fluid" style="width: 30px; height: 30px;">
                    <p class="ms-3">Watch training videos.</p>
                </div>
                <div class="d-flex mb-3">
                    <img src="{{ asset('img/bullet.png') }}" alt="bullet" class="img-fluid" style="width: 30px; height: 30px;">
                    <p class="ms-3">Read books, publications & more.</p>
                </div> -->
            </div>
            </div>
        </div>
        <div class="position-absolute" style = "top: 35%; left: 45%;">
            <div>
                <img src="{{ asset('img/SMFD 13.png') }}" alt="device 2" height="100%" width="auto">
            </div>
        </div>
        <div class="position-absolute" style = "top: 40%; left: 58%;">
            <div>
                <img src="{{ asset('img/SMFD 11.png') }}" alt="device 2" height="100%" width="auto">
            </div>
        </div>
    </div>
</div>

@endsection
