@extends('layout')
@section('content')

<div class="container-fluid mt-4">
    <div class="row">
        <!-- Form on the left -->
        <div class="col-lg-8 order-lg-1 px-5">
            <!-- Contact Details container -->
            <div class="container main-container">
                <div class="pt-3 fs-2 text-dark text-start fw-bold">
                    We’re sorry to see you go.
                </div>
                <div class="pt-2 pb-4 fs-5 text-dark text-start w-75" style="font-weight: 500;">
                    Deleting your account will:
                </div>
                <div class="p-3 fs-6 text-dark w-100 rounded d-flex flex-column lh-lg" style="background-color: #eaeaea;">
                    <text> - Delete all your <b>information</b> and <b>remove your access on all devices.</b></text>
                    <text> - Delete all your <b>transaction history</b> and your <b>orders information.</b></text>
                    <text class="lh-base"> - This action cannot be undone!</text>
                </div>
                <div class="pt-5 pb-3 fs-4 text-dark text-start fw-bold">
                    Your details
                </div>
                <div>
                    <form action="#">
                        <div class="row my-2 px-3">
                            <div class="col-lg-6 mb-3">
                                <label for="email" class="fw-bold fs-6 pb-2 px-3">Email<sup class="text-danger">*</sup></label>
                                <input type="email" id="email" class="form-control p-2" placeholder="Email" required style="border-radius: 10px; border: 1px solid #eaeaea;">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="password" class="fw-bold fs-6 pb-2 px-3">Password<sup class="text-danger">*</sup></label>
                                <input type="password" id="password" class="form-control p-2" placeholder="Fill in password" required style="border-radius: 10px; border: 1px solid #eaeaea;">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="py-3 pb-2 fs-6 text-dark text-start fw-bold" style="padding-left: 35px;">
                    Reason<sup class="text-danger">*</sup>
                </div>
                <div class="form-group px-3">
                    <textarea class="form-control" rows="5" placeholder="Write your message here..." style="font-size: 18px; padding-top: 10px;"></textarea>
                </div>
                <div class="container">
                    <div class="row" style="display:flex;">
                        <div class="offset-lg-9 col-lg-3 pb-md-4">
                            <div class="d-flex align-items-center justify-content-end pt-4 mt-3">
                                <button type="submit" class="btn btn-rounded text-white fs-5 px-3 py-2" style="background-color: #004d40;">Request Deletion</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 order-lg-3 px-5">
            <div class="address-container mt-3">
                <h5 class="fw-bold">Business Enquiries</h5>
                <p>
                    <a href="mailto:enquiry@smartmfdealers.com" class="text-decoration-none text-dark">
                        enquiry@smartmfdealers.com
                    </a>
                </p>

                <div class="divider my-3"></div>

                <h5 class="fw-bold">Support Enquiries</h5>
                <p>
                    <a href="mailto:support@smartmfdealers.com" class="text-decoration-none text-dark">
                        support@smartmfdealers.com
                    </a>
                </p>

                <div class="divider my-3"></div>

                <h5 class="fw-bold">Address</h5>
                <p>
                    QBEEP INTELLIGENT SYSTEMS SDN. BHD. (1406224-P) <br>
                    B-3A-4, North Point, Mid Valley City, No 1, Medan Syed Putra Utama, 59200 Kuala Lumpur, Malaysia.
                </p>

                <div class="divider my-3"></div>

                <h5 class="fw-bold">Follow Us</h5>
                <div class="d-flex">
                    <a href="https://www.facebook.com/QBeepSolutions" target="_blank" class="me-3">
                        <img src="{{ asset('img/main-facebook.png') }}" width="40" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/qbeepis" target="_blank" class="me-3">
                        <img src="{{ asset('img/main-instagram.png') }}" width="40" alt="Instagram">
                    </a>
                    <a href="https://qbeep.com/" target="_blank" class="me-3">
                        <img src="{{ asset('img/main-webpage.png') }}" width="40" alt="Website">
                    </a>
                    <a href="https://wa.me/60109130399" target="_blank">
                        <img src="{{ asset('img/main-whatsapp.png') }}" width="40" alt="WhatsApp">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection