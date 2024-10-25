@extends('layout')
@section('content')

<!-- Home Header -->
<div class="justify-content-center position-relative">
    <div class="centered text-white text-center w-75">
        <h2>Your all in one hub for MFIII, MF+ and LABRMS <br>
            Discover endless possibilities with SmartMFDealers.</h2>
    </div>
    <img src="{{ asset('img/download-background.png') }}" alt="home_background" class="img-fluid" style="width: 100%; height: 70%; object-fit: cover;">
    <!-- <img src="{{ asset('img/object-2.png') }}" alt="frame" class="img-fluid position-absolute" style="top: 0; left: 0; width: 100%; height: 70%; object-fit: cover;"> -->
</div>

<!-- Content Section -->
<div>
    <div class="container-fluid">
        <div class="row justify-content-start mb-2">
            <div class="col-md-6 text-center" style="margin-top:-80px; margin-left:-65px">
                <img src="{{ asset('img/MF3 BRAND 1.png') }}" alt="MFIII" class="img-fluid">
                <img src="{{ asset('img/MFBRAND 1.png') }}" alt="MF+" class="img-fluid">
                <img src="{{ asset('img/LABRMS BRAND 1.png') }}" alt="LabRMS" class="img-fluid px-2">
            </div>
        </div>
        
        <div class="row justify-content-around">
            <div class="col-md-10 d-flex flex-column">
                <div class="d-flex mb-3 w-50">
                    <p class="ms-3 fs-4">Seamless experience across all brands and products. Easily find the products you like, place orders, read the latest publications, and watch our extensive product training videos—all in one user-friendly app.</p>
                </div>
                <div class="d-flex mb-3 mt-5">
                    <h3><p class="ms-3 fw-bold">Download the app now.</p></h3>
                </div>
                <div class="d-flex mb-3">
                    <a href="https://play.google.com/store/apps/details?id=com.smartmfdealers.smfd&pcampaignid=web_share" target="_blank">
                        <img src="{{ asset('img/Google PLay.png') }}" alt="bullet" class="img-fluid px-2">
                    </a>
                    <a href="https://apps.apple.com/app/ew-global-smartmfdealers/id6502800217" target="_blank">
                        <img src="{{ asset('img/App Store.png') }}" alt="bullet" class="img-fluid px-4"> 
                    </a>
                </div>
            </div>
            </div>
        </div>
        <div class="position-absolute" style = "top: 30%; left: 45%;">
            <div>
                <img src="{{ asset('img/SMFD 8.png') }}" alt="device 3" height="100%" width="auto">
            </div>
        </div>
    </div>
</div>

@endsection
