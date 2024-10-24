<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-DM9WNdgkOmAKvYkOz4rEdkX2IR5cWt/sM+Jbs02UJPC+Bnsm3vlJ3fKkp9MFoqH3SH1a4JgZi/pKPFwUBSx9KA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>SMFD</title>

    <style>
        html,
        body {
            height: 110%;
            margin: 0;
        }

        main {
            flex: 1;
        }

        body {
            font-size: 15px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        nav {
            background-color: #097584;
        }

        .centered {
            text-shadow: 2px 2px #000000;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .btn {
            font-size: 15px;
            padding: 1px 10px 2px 10px;
            border-radius: 44px;
            background-color: transparent;
            border-color: #FFFFFF;
        }

        #link {
            text-decoration: none;
            color: #FFFFFF;
        }

        .nav-link {
            padding-top: 5px;
            /* Adjust as necessary */
            padding-bottom: 5px;
            /* Adjust as necessary */
        }

        .nav-item {
            display: flex;
            align-items: center;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1000;
            background-color: #004d40;
        }

        .social-icons {
            display: flex;
            align-items: center;
        }

        .social-icons img {
            margin-right: 15px;
            cursor: pointer;
        }

        .social-icons span {
            margin-right: 20px;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .address-container {
            min-height: 550px;
            height: 700px;
            width: 445px;
            padding: 40px;
            background-color: #eaeaea;
            align-items: end;
            border-radius: 20px;
        }

        .details-header {
            font-size: 18px;
            color: #247878;
            font-weight: 600;
            word-wrap: break-word;
        }

        .details-text {
            font-size: 16px;
            /* font-size: calc(100% + .23vw + .23vh); */
            font-weight: 600;
            word-wrap: break-word;
        }

        .divider {
            border-top: 1px solid #ffffff;
            /* Adjust color and thickness as needed */
            /* margin: 0px; */
            /* Adjust spacing as needed */
        }

        .content-container {
            background-color: transparent;
            margin: 10px;
            margin-top: 10px;
            text-align: left;
            /* Ensure text is left-aligned */
        }

        .rounded-box {
            background-color: white;
            border-radius: 15px;
            padding: 10px;
            /* max-width: px; */
            /* Control the size */
            text-align: left;
            /* Align content to the start */
        }

        .rounded-box>h2 {
            color: black;
            margin-top: 20px;
            margin-left: 20px;
            margin-bottom: 30px;
            text-shadow: 1px 1px 1px #919191, 1px 2px 1px #919191, 1px 3px 1px #919191;
            font-weight: 900;
        }

        .subheader,
        .question-title {
            color: black;
            margin-left: 20px;
            text-align: left;
            /* Ensure the text is left-aligned */
        }

        .accordion-button {
            /* color: teal; */
            font-weight: bold;
            padding-bottom: 15px;
        }

        .accordion-button:hover {
            color: teal;
            text-decoration: none;
            background-color: transparent;
        }

        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                align-items: flex-start;
                text-align: center;
            }

            .footer-container span {
                margin-bottom: 10px;
            }

            .social-icons {
                justify-content: center;
                width: 100%;
            }

            .rounded-box {
                padding: 10px;
                text-align: left;
                /* Keep left alignment on larger screens */
            }
        }

        .navbar-toggler {
            border-color: white;
        }

        .navbar-toggler-icon {
            color: white;
        }
    </style>

</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-light py-2 px-5">
        <a class="navbar-brand text-white mt-1" href="/home">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" width="200" height="auto" class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item px-1">
                    @if (request()->is('home'))
                    <a class="nav-link text-white">
                        <button type="button" class="btn text-white">Homepage</button>
                    </a>
                    @else
                    <a class="nav-link text-white" href="/home">Homepage</a>
                    @endif
                </li>

                <li class="nav-item px-1">
                    @if (request()->is('download'))
                    <a class="nav-link text-white">
                        <button type="button" class="btn text-white">Download</button>
                    </a>
                    @else
                    <a class="nav-link text-white" href="/download">Download</a>
                    @endif
                </li>

                <li class="nav-item px-1">
                    @if (request()->is('reset/password') || request()->is('terminate'))
                    <a class="nav-link text-white" href="#">Reset Password</a>
                    @endif
                </li>

                <li class="nav-item px-1">
                    @if (request()->is('register') || request()->is('verification') || request()->is('create/password'))
                    <a class="nav-link text-white" href="#">About Us</a>
                    @endif
                </li>

            </ul>
        </div>
    </nav>

    @yield('content')

    @if (!request()->is('register') && !request()->is('verification') && !request()->is('create/password') && !request()->is('reset/password'))
    <footer class="text-center text-lg-start text-white mt-auto">
        <section class="p-3" style="background-color: #097584; height: auto;">
            <div class="row text-center">
                <a href="#" class="col" id="link">
                    <span>Guide</span>
                </a>
                <a href="/contact" class="col" id="link">
                    <span>Contact Us</span>
                </a>
                <a href="/faq" class="col" id="link">
                    <span>FAQ</span>
                </a>
                <a href="#" class="col" id="link">
                    <span>Terms & Conditions</span>
                </a>
                <a href="#" class="col" id="link">
                    <span>Privacy Policy</span>
                </a>
                <a href="#" class="col" id="link">
                    <span>Copyright 2024 Qbeep</span>
                </a>
                <a href="#" class="col" id="link">
                    <span>All Right Reserved</span>
                </a>
            </div>
        </section>
        <section class="p-4" style="background-color: #004545; height: auto">
            <div class="footer-container mx-5">
                <span>B-3A-4, North Point, Mid Valley City, No 1, Medan Syed Putra Utama, 59200 Kuala Lumpur, Malaysia.</span>
                <div class="social-icons">
                    <span>Follow us on:</span>
                    <a href="https://www.facebook.com/QBeepSolutions" target="_blank">
                        <img src="{{ asset('img/main-facebook.png') }}" width="35" height="35" alt="Facebook" />
                    </a>
                    <a href="https://www.instagram.com/qbeepis" target="_blank">
                        <img src="{{ asset('img/main-instagram.png') }}" width="35" height="35" alt="Instagram" />
                    </a>
                    <a href="https://qbeep.com/" target="_blank">
                        <img src="{{ asset('img/main-webpage.png') }}" width="35" height="35" alt="Website" />
                    </a>
                    <a href="https://wa.me/60109130399" target="_blank">
                        <img src="{{ asset('img/main-whatsapp.png') }}" width="35" height="35" alt="WhatsApp" />
                    </a>
                </div>
            </div>
        </section>
    </footer>
    @endif

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>