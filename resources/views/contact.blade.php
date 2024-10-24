@extends('layout')
@section('content')

<div class="container-fluid mt-4">
    <div class="row">
        <!-- Form on the left -->
        <div class="col-lg-8 order-lg-1 px-5">
            <!-- Contact Details container -->
            <div class="container main-container">
                <div class="pt-3 fs-2 text-dark text-start fw-bold">
                    Get in Touch with Us.
                </div>
                <div class="pt-2 fs-5 text-dark text-start w-75">
                    Got questions or feedback? Drop us a message below or use the contact details provided. We’ll get back to you soon!
                </div>
                <div class="pt-5 pb-3 fs-4 text-dark text-start fw-bold">
                    Your details
                </div>
                <div>
                    <form action="#">
                        <div class="row my-2 px-3">
                            <div class="col-lg-6 mb-3">
                                <label for="full-name" class="fw-bold fs-6 pb-2 px-3">Full Name<sup class="text-danger">*</sup></label>
                                <input type="text" id="full-name" class="form-control p-2 " placeholder="Full Name" required style="border-radius: 10px; border: 1px solid #eaeaea;">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="phone" class="fw-bold fs-6 pb-2 px-3">Phone Number</label>
                                <div class="d-inline-flex w-100" style="gap: 10px;">
                                    <input type="tel" id="phone-code" class="form-control p-2" placeholder="+60" required style="border-radius: 10px; border: 1px solid #eaeaea; max-width: 10%;">
                                    <input type="tel" id="phone" class="form-control p-2" placeholder="Phone number" required style="border-radius: 10px; border: 1px solid #eaeaea; flex-grow: 1;">
                                </div>
                            </div>
                        </div>
                        <div class="row my-2 px-3">
                            <div class="col-lg-6 mb-3">
                                <label for="email" class="fw-bold fs-6 pb-2 px-3">Email<sup class="text-danger">*</sup></label>
                                <input type="email" id="email" class="form-control p-2" placeholder="Email" required style="border-radius: 10px; border: 1px solid #eaeaea;">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="py-3 pb-2 fs-6 text-dark text-start fw-bold" style="padding-left: 35px;" >
                    Your Message<sup class="text-danger">*</sup>
                </div>
                <div class="form-group px-3">
                    <textarea class="form-control" rows="5" placeholder="Write your message here..." style="font-size: 18px; padding-top: 10px;"></textarea>
                </div>
                <div class="container">
                    <div class="row" style="display:flex;">
                        <div class="offset-lg-9 col-lg-3 pb-md-4">
                            <div class="d-flex align-items-center justify-content-end pt-4 mt-3">
                                <button type="submit" class="btn btn-rounded text-white fs-5 px-3 py-2" style="background-color: #004d40;">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 order-lg-2">
            <!-- Address Container -->
            <div class="container address-container mt-3">
                <div class="row" style="height: 100%;">
                    <div class="col-sm-12 d-flex flex-column justify-content-center">
                        <div class="details-header">
                            Business Enquiries
                        </div>
                    </div>
                    <div class="col-sm-12 d-flex flex-column justify-content-center">
                        <div class="details-text">
                            <a href="mailto:enquiry@smartmfdealers.com" target="_blank" class=" link-dark link-offset-2 link-offset-3-hover link-underline-dark link-underline-opacity-0 link-underline-opacity-100-hover">
                                enquiry@smartmfdealers.com
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="divider my-2"></div> <!-- Add margin -->
                    </div>
                    <div class="col-sm-12 d-flex flex-column justify-content-center">
                        <div class="details-header">
                            Support Enquiries
                        </div>
                    </div>
                    <div class="col-sm-12 d-flex flex-column justify-content-center">
                        <div class="details-text">
                            <a href="mailto:support@smartmfdealers.com" target="_blank" class=" link-dark link-offset-2 link-offset-3-hover link-underline-dark link-underline-opacity-0 link-underline-opacity-100-hover">
                                support@smartmfdealers.com
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="divider my-2"></div> <!-- Add margin -->
                    </div>
                    <div class="col-sm-12 d-flex flex-column justify-content-center">
                        <div class="details-header">
                            Address
                        </div>
                    </div>
                    <div class="col-sm-12 d-flex flex-column justify-content-center">
                        <div class="details-text">
                            QBEEP INTELLIGENT SYSTEMS SDN. BHD. (1406224-P) <br>
                            B-3A-4, North Point, Mid Valley City, No 1, Medan Syed Putra Utama, 59200 Kuala Lumpur, Malaysia.
                        </div>
                    </div>
                    <div>
                        <div class="divider my-2"></div> <!-- Add margin -->
                    </div>
                    <div class="col-sm-12 d-flex flex-column justify-content-center">
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