@extends('layout')
@section('content')

<!-- Home Header -->
<div class="justify-content-center position-relative" style="height: auto; width: 100%; background-color: #F9F9F9;">
    <div class="text-white text-center w-75 position-absolute top-50 start-50 translate-middle">
        <h1 class="fw-bold text-center" style="color:#004545">Create a password, and we'll email you once <br>
            your details are verified.</h1>
    </div>
    <img src="{{ asset('img/Vector.png') }}" alt="home_background" class="img-fluid" style="width: auto; height: auto; object-fit: cover;">
</div>

<!-- Content Section -->
<div class="container-fluid position-absolute" style="top: 40%;">
    <div class="row justify-content-center">
        <div class="col-lg-6 order-lg-1 px-4">
            <div>
                <form class="border shadow-sm p-3 mb-5 bg-body rounded" action="#">
                    <div class="container main-container">
                        <div class="pb-2 text-dark text-start">
                            <a href="/verification" class="fs-2 text-decoration-none text-dark">&#x2190;</a>
                        </div>
                        <div class="pt-3 pb-1 px-3 fs-3 text-dark text-start fw-bold">
                            Create your password
                        </div>
                        <div class="pb-3 px-3 fs-6 text-dark text-start">
                            Your password must be at least 8 characters & contain at least 2 of the following: upper case letter, number & symbols.
                        </div>
                        <div class="row my-3 px-3">
                            <div class="col-lg-6 mb-3">
                                <label for="password" class="fw-bold fs-6 pb-2 px-2">Password</label>
                                <input type="password" id="password" class="form-control p-2 " placeholder="Fill in password" required style="border-radius: 10px; border: 1px solid #eaeaea;">
                            </div>
                        </div>
                        <div class="row my-2 px-3">
                            <div class="col-lg-6" style="margin-bottom: 20%;">
                                <label for="confirm_password" class="fw-bold fs-6 pb-2 px-2">Confirm Password</label>
                                <input type="password" id="confirm_password" class="form-control p-2" placeholder="Fill in your password" required style="border-radius: 10px; border: 1px solid #eaeaea;">
                            </div>
                        </div>
                </form>
            </div>
            <!-- Terms, Privacy, and Button Section -->
            <div class="container">
                <div class="row my-2">
                    <div class="col-lg-9 mb-3">
                        <div class="mb-3">
                            <span class="px-2" style="font-size:13.5px;">
                                By selecting <b>Agree & Continue,</b> I agree to SMFD
                                <a href="#" style="color: #005541;">Terms & Conditions</a>
                                & acknowledge the <a href="#" style="color: #005541;">Privacy Policy.</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div>
                            <a href="#"><button type="submit" class="btn btn-rounded text-white px-4 py-2" style="background-color: #004d40;">Agree & Continue</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection