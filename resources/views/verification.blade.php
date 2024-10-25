@extends('layout')
@section('content')

<!-- Home Header -->
<div class="justify-content-center position-relative" style="height: auto; width: 100%; background-color: #F9F9F9;">
    <div class="text-white text-center w-75 position-absolute top-50 start-50 translate-middle">
        <h1 class="fw-bold text-center" style="color:#004545">Verify your phone number so we know it’s you.</h1>
    </div>
    <img src="{{ asset('img/Vector.png') }}" alt="home_background" class="img-fluid" style="width: auto; height: auto; object-fit: cover;">
</div>

<!-- Content Section -->
<div class="container-fluid position-absolute" style="top: 45%;">
    <div class="row justify-content-center">
        <div class="col-lg-6 order-lg-1 px-4">
            <div>
                <form class="border shadow-sm p-4 mb-5 bg-body rounded" action="#">
                    <div class="container main-container">
                        <div class="pb-2 text-dark text-start">
                            <a href="/register" class="fs-2 text-decoration-none text-dark">&#x2190;</a>
                        </div>
                        <div class="text-center py-3">
                            <h2 class="fw-bold text-dark">Verify your phone number</h2>
                            <p class="text-muted">Enter the 6-digit code we sent to your phone.</p>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="d-flex justify-content-center w-100" style="gap: 15px;">
                                @for ($i = 0; $i < 6; $i++)
                                    <input type="text" id="otp{{$i}}" maxlength="1" class="otp-input form-control text-center fs-4 fw-bold" required
                                    style="background-color:#F5F5F5; border:none; border-bottom: 2px solid #004d40; width: 60px; height: 60px;">
                                @endfor
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#"><button type="submit" class="btn btn-rounded text-white fs-5 px-5 py-2" style="background-color: #004d40;">Continue</button></a>
                        </div>
                        <div class="text-center mt-4">
                            <p class="text-muted">Didn’t receive a code? <a href="#" class="text-decoration-none fw-bold" style="color: #004d40;">Resend code</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection