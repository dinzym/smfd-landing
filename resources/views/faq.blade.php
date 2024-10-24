@extends('layout')
@section('content')

<div class="container-fluid mt-5 ">
    <div class="row">
        <div class="col-lg-8 order-lg-1 px-5">
            <div class="main-container">
                <h1 class="fs-2 fw-bold text-dark">FAQ</h1>
                <p class="fs-5 text-dark">
                    Have questions about SmartMFDealers? Explore our FAQs. If you need more help, our support team is here for you!
                </p>
            </div>
            <!-- FAQ Accordion -->
            <div class="accordion accordion-flush mt-4" id="faqAccordion">
                <!-- FAQ 1 -->
                <div class="accordion-item py-1">
                    <h2 class="accordion-header" id="faqHeading1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
                            How do I download the mobile app?
                        </button>
                    </h2>
                    <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ab error ut? Voluptas aut consequatur ad veniam. Voluptate, facilis labore? Consectetur atque sit explicabo voluptatem quisquam nostrum dolorum illum necessitatibus.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item py-1">
                    <h2 class="accordion-header" id="faqHeading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                            Is the mobile app free?
                        </button>
                    </h2>
                    <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ut sunt placeat veritatis odio provident voluptas in aspernatur, eligendi maxime, dicta facilis illum architecto perspiciatis, corporis debitis! Quod, nulla similique.
                        </div>
                    </div>
                </div>


                <!-- FAQ 3 -->
                <div class="accordion-item py-1">
                    <h2 class="accordion-header" id="faqHeading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                            How do I create an account on the mobile app?
                        </button>
                    </h2>
                    <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ut sunt placeat veritatis odio provident voluptas in aspernatur, eligendi maxime, dicta facilis illum architecto perspiciatis, corporis debitis! Quod, nulla similique.
                        </div>
                    </div>
                </div>


                <!-- FAQ 4 -->
                <div class="accordion-item py-1">
                    <h2 class="accordion-header" id="faqHeading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                            Can I use the same account on multiple devices?
                        </button>
                    </h2>
                    <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis natus non atque, ipsum repellat exercitationem nihil minus tenetur maiores consequatur.
                        </div>
                    </div>
                </div>


                <!-- FAQ 5 -->
                <div class="accordion-item py-1">
                    <h2 class="accordion-header" id="faqHeading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                            I forgot my password. How can I reset it?
                        </button>
                    </h2>
                    <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum deleniti earum asperiores accusantium exercitationem rerum reiciendis dolore.
                        </div>
                    </div>
                </div>


                <!-- FAQ 6 -->
                <div class="accordion-item py-1">
                    <h2 class="accordion-header" id="faqHeading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                            How can I update the mobile app to the latest version?
                        </button>
                    </h2>
                    <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum corporis aperiam aliquam id? Expedita, numquam alias?
                        </div>
                    </div>
                </div>


                <!-- FAQ 7 -->
                <div class="accordion-item py-1">
                    <h2 class="accordion-header" id="faqHeading7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7">
                            Can I use the app offline?
                        </button>
                    </h2>
                    <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHeading7" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nobis repudiandae tempora voluptatem eveniet veniam ea!
                        </div>
                    </div>
                </div>


                <!-- FAQ 8 -->
                <div class="accordion-item py-1">
                    <h2 class="accordion-header" id="faqHeading8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse8" aria-expanded="false" aria-controls="faqCollapse8">
                            How can I provide feedback or report a bug in the app?
                        </button>
                    </h2>
                    <div id="faqCollapse8" class="accordion-collapse collapse" aria-labelledby="faqHeading8" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ipsa sint! Quo debitis reprehenderit laudantium.
                        </div>
                    </div>
                </div>


                <!-- FAQ 9 -->
                <div class="accordion-item py-1">
                    <h2 class="accordion-header" id="faqHeading9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse9" aria-expanded="false" aria-controls="faqCollapse9">
                            How can I provide feedback or report a bug in the app?
                        </button>
                    </h2>
                    <div id="faqCollapse9" class="accordion-collapse collapse" aria-labelledby="faqHeading9" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore saepe officiis numquam dolorum fugit dignissimos.
                        </div>
                    </div>
                </div>


                <!-- FAQ 10 -->
                <div class="accordion-item py-1">
                    <h2 class="accordion-header" id="faqHeading10">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse10" aria-expanded="false" aria-controls="faqCollapse10">
                            How can I provide feedback or report a bug in the app?
                        </button>
                    </h2>
                    <div id="faqCollapse10" class="accordion-collapse collapse" aria-labelledby="faqHeading10" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla dignissimos distinctio asperiores ipsa placeat debitis!
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        
        <div class="col-lg-4 col-lg-4 order-lg-3 px-5">
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