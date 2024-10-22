@extends('layout')
@section('content')

<div class="container-fluid mt-4">
    <div class="row">
        <!-- Form on the left -->
        <div class="col-lg-8 order-lg-1 px-5">
            <!-- Contact Details container -->
            <div class="container main-container">
                <div class="pt-3 fs-6 text-dark text-start fw-bold">
                    Contact Details
                </div>
                <!-- Input Fields -->
                <div class="container form-container">
                    <form action="#">
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- <span class="fw-bold">Full Name</span> -->
                            <div class="d-flex my-3 fs-5 w-75 flex-column" style=" border-radius: 15px; box-sizing: border-box;">
                                <input type="text" class="p-3 fs-6 mx-2" style=" border-radius: 10px;  border: 1px solid #eaeaea;" placeholder="Full Name" required>
                            </div>
                            <div class="d-flex my-3 fs-5 w-75 flex-column">
                                <input type="text" class="p-3 fs-6 mx-2" style=" border-radius: 10px;  border: 1px solid #eaeaea;" placeholder="Phone number" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex my-3 fs-5 w-50 flex-column" style=" border-radius: 15px; box-sizing: border-box;">
                                <input type="text" class="p-3 fs-6 mx-2" style=" border-radius: 10px;  border: 1px solid #eaeaea;" placeholder="Email" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="pt-3 fs-6 text-dark text-start fw-bold">
                    Message
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="5" placeholder="Write your message here..." style="font-size: 18px; padding-top: 10px;"></textarea>
                </div>
                <!-- Submit Button -->
                <div class="container">
                    <div class="row" style="display:flex;">
                        <div class="offset-lg-9 col-lg-3 pb-md-4">
                            <div class="d-flex align-items-center justify-content-end pt-4 mt-3">
                                <button type="submit" class="btn btn-rounded text-white fs-5 px-5 py-2" style="background-color: #004d40;">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Address on the right -->
        <div class="col-lg-4 order-lg-2">
            <!-- Address Container -->
            <div class="container address-container mt-3">
                <div class="row" style="height: 100%;">
                    <div class="col-12">
                        <div class="details-header">
                            Business Enquiries
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="details-text">
                            <a href="mailto:enquiry@smartmfdealers.com" target="_blank" style="text-decoration:none;display:block;color:rgba(51,51,51,1);">
                                enquiry@smartmfdealers.com
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="divider"></div>
                    </div>
                    <div class="col-12">
                        <div class="details-header">
                            Support Enquiries
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="details-text">
                            <a href="mailto:support@smartmfdealers.com" target="_blank" style="text-decoration:none;display:inline-block;color:rgba(51,51,51,1);">
                                support@smartmfdealers.com
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="divider"></div>
                    </div>
                    <div class="col-12">
                        <div class="details-header">
                            Address
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="details-text">
                            QBEEP INTELLIGENT SYSTEMS SDN. BHD. (1406224-P) <br>
                            B-3A-4, North Point, Mid Valley City, No 1, Medan Syed Putra Utama, 59200 Kuala Lumpur, Malaysia.
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="divider"></div>
                    </div>
                    <div class="col-12">
                        <div class="details-text">
                            <span class="fw-bold">Follow us on:</span>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col text-start">
                                <a href="https://www.facebook.com/QBeepSolutions" target="_blank">
                                    <img src="{{ asset('img/main-facebook.png') }}" width="40" height="auto" alt="Facebook" />
                                </a>
                            </div>
                            <div class="col text-start">
                                <a href="https://www.instagram.com/qbeepis" target="_blank">
                                    <img src="{{ asset('img/main-instagram.png') }}" width="40" height="auto" alt="Instagram" />
                                </a>
                            </div>
                            <div class="col text-start">
                                <a href="https://qbeep.com/" target="_blank">
                                    <img src="{{ asset('img/main-webpage.png') }}" width="40" height="auto" alt="Website" />
                                </a>
                            </div>
                            <div class="col text-start">
                                <a href="https://wa.me/60109130399" target="_blank">
                                    <img src="{{ asset('img/main-whatsapp.png') }}" width="40" height="auto" alt="WhatsApp" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
