@extends('layout')
@section('content')

<!-- Home Header -->
<div class="justify-content-center position-relative" style="height: auto; width: 100%; background-color: #F9F9F9;">
    <div class="text-white text-center w-75 position-absolute top-50 start-50 translate-middle">
        <h1 class="fw-bold" style="color:#004545">Register as a Dealer – it's quick, easy, <br>
            and won't take long. We promise!</h1>
    </div>
    <img src="{{ asset('img/Vector.png') }}" alt="home_background" class="img-fluid" style="width: auto; height: auto; object-fit: cover;">
</div>

<!-- Content Section -->
<div class="container-fluid position-absolute" style="top: 45%;">
    <div class="row justify-content-center">
        <div class="col-lg-8 order-lg-1 px-5">
            <div>
                <form class="border shadow-sm p-3 mb-5 bg-body rounded" action="#">
                    <div class="container main-container">
                        <div class="py-3 px-3 fs-3 text-dark text-start fw-bold">
                            Fill up your details.
                        </div>
                        <div class="row my-2 px-3">
                            <div class="col-lg-6 mb-3">
                                <label for="first-name" class="fw-bold fs-6 pb-2 px-2">First Name</label>
                                <input type="text" id="first-name" class="form-control p-2 " placeholder="First Name" required style="border-radius: 10px; border: 1px solid #eaeaea;">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="last-name" class="fw-bold fs-6 pb-2 px-2">Last Name</label>
                                <input type="text" id="last-name" class="form-control p-2 " placeholder="Last Name" required style="border-radius: 10px; border: 1px solid #eaeaea;">
                            </div>
                        </div>
                        <div class="row my-2 px-3">
                            <div class="col-lg-6 mb-3">
                                <label for="email" class="fw-bold fs-6 pb-2 px-2">Email</label>
                                <input type="email" id="email" class="form-control p-2" placeholder="Email" required style="border-radius: 10px; border: 1px solid #eaeaea;">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="phone" class="fw-bold fs-6 pb-2 px-2">Phone Number</label>
                                <div class="d-inline-flex w-100" style="gap: 10px;">
                                    <input type="tel" id="phone-code" class="form-control p-2" placeholder="+60" required style="border-radius: 10px; border: 1px solid #eaeaea; max-width: 10%;">
                                    <input type="tel" id="phone" class="form-control p-2" placeholder="1234567890" required style="border-radius: 10px; border: 1px solid #eaeaea; flex-grow: 1;">
                                </div>
                            </div>
                        </div>
                        <div class="row my-2 px-3">
                            <div class="col-lg-6 mb-3">
                                <label for="country" class="fw-bold fs-6 pb-2 px-2">Country</label>
                                <!-- <input type="country" id="country" class="form-control p-2" placeholder="code" required style="border-radius: 10px; border: 1px solid #eaeaea;"> -->
                                <select class="form-select" aria-label="country">
                                    <option selected>code</option>
                                    <option value="1">Malaysia</option>
                                    <option value="2">Singapore</option>
                                    <option value="3">Indonesia</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="referral" class="fw-bold fs-6 pb-2 px-2">Referral</label>
                                <input type="text" id="referral" class="form-control p-2 " placeholder="Referral" required style="border-radius: 10px; border: 1px solid #eaeaea;">
                            </div>
                        </div>
                </form>
            </div>
            <div class="container">
                <div class="row" style="display:flex;">
                    <div class="offset-lg-9 col-lg-3 pb-md-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#"><button type="submit" class="btn btn-rounded text-white fs-5 px-5 py-2" style="background-color: #004d40;">Continue</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection