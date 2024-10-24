@extends('layout')
@section('content')

<!-- Content Section -->
<div class="container-fluid" style="margin-top: 10%;">
    <div class="row justify-content-center">
        <div class="col-lg-8 order-lg-1 px-5">
            <div>
                <!-- Added custom height here -->
                <form class="border shadow-sm p-3 mb-5 bg-body rounded" action="#" style="height: 500px;"> 
                    <div class="container main-container" style="height: 100%;"> 
                        <div class="py-3 px-3 fs-3 text-dark text-start fw-bold">
                            Reset Password
                        </div>
                        <div class="row my-2 px-3">
                            <div class="col-lg-6 mb-3">
                                <label for="email" class="fw-bold fs-6 pb-2 px-2">Email</label>
                                <input type="email" id="email" class="form-control p-2" placeholder="email@yahoo.com" required style="border-radius: 10px; border: 1px solid #eaeaea;">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="new_password" class="fw-bold fs-6 pb-2 px-2">New Password</label>
                                <input type="password" id="new_password" class="form-control p-2" placeholder="Fill in Password" required style="border-radius: 10px; border: 1px solid #eaeaea;">
                            </div>
                        </div>
                        <div class="row my-2 px-3">
                            <div class="col-lg-6 mb-3">
                                <label for="old_password" class="fw-bold fs-6 pb-2 px-2">Old Password</label>
                                <input type="password" id="old_password" class="form-control p-2" placeholder="Fill in Password" required style="border-radius: 10px; border: 1px solid #eaeaea;">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="confirm_password" class="fw-bold fs-6 pb-2 px-2">Confirm Password</label>
                                <input type="password" id="confirm_password" class="form-control p-2" placeholder="Fill in Password" required style="border-radius: 10px; border: 1px solid #eaeaea;">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container">
                <div class="row" style="display:flex;">
                    <div class="offset-lg-9 col-lg-3 pb-md-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#"><button type="submit" class="btn btn-rounded text-white fs-5 px-5 py-2" style="background-color: #004d40;">Confirm</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
