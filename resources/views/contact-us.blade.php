<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/favicon.png" rel="icon" />

    <!-- Title -->
    <title>Contact Us - Spirit Light Ministries Online Church</title>

    <!-- Meta Description -->
    <meta name="description"
        content="Get in touch with Spirit Light Ministries Online Church. Contact us for inquiries, support, and prayer requests. We are here to serve you." />

    <!-- Meta Keywords -->
    <meta name="keywords"
        content="Spirit Light Ministries, contact us, online church, inquiries, prayer requests, community support, Prophet Caleb Wekesa, Pastor Jephter Wekeda" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Contact Us - Spirit Light Ministries Online Church" />
    <meta property="og:description"
        content="Have questions? Reach out to Spirit Light Ministries Online Church for support, inquiries, or to connect with our community." />
    <meta property="og:image" content="\images\logo-dark.png" /> <!-- Update with your church logo image -->
    <meta property="og:url" content="https://prophetjeffter.com/contact-us" />
    <!-- Update with the actual URL of the contact page -->
    <meta property="og:type" content="website" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Contact Us - Spirit Light Ministries Online Church" />
    <meta name="twitter:description"
        content="Contact Spirit Light Ministries Online Church for inquiries, support, and prayer requests. We are dedicated to serving our community." />
    <meta name="twitter:image" content="\images\logo-dark.png" /> <!-- Update with your church logo image -->

    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="css/simple-line-icons.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Owl Slider -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Color Panel -->
    <link href="css/color_panel.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/color-schemes/red.css" id="changeable-colors">
    <!-- Main Style -->
    <link rel="stylesheet" href="css/style.css" class="main-style">
</head>

<!--Body Start-->

<body data-res-from="1025">
    <!--Page Loader-->
    <div class="page-loader"></div>
    @include('header')
    <!-- header -->
    <!-- page-header -->
    <div class="page-title-wrap typo-white">
        <div class="page-title-wrap-inner section-bg-img" data-bg="images/page-title.jpg">
            <span class="theme-overlay"></span>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="page-title-inner">
                            <div id="breadcrumb" class="breadcrumb margin-bottom-10">
                                <a href="index.html" class="theme-color">Home</a>
                                <span class="current">Contact Us</span>
                            </div>
                            <h1 class="page-title mb-0">Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <!-- Page Content -->
    <div class="content-wrapper pad-none">
        <div class="content-inner">
            <!-- Contact Section -->
            <section id="contact-section" class="contact-section pad-bottom-none">
                <div class="container">
                    <!-- Row -->
                    <div class="row">
                        <!-- Col -->
                        <div class="col-lg-4 mb-lg-0 mb-4">
                            <div class="div-bg-img b-radius-20" data-bg="images/contact/contact_bg1.jpg">
                                <div class="f-box c-page text-center typo-white">
                                    <div class="feature-icon margin-bottom-10">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <div class="feature-content">
                                        <div class="feature-title">
                                            <h5 class="mb-2">Our Location</h5>
                                        </div>
                                        <p class="mb-0">Nairobi Kenya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-lg-4 mb-lg-0 mb-4">
                            <div class="div-bg-img b-radius-20" data-bg="images/contact/contact_bg2.jpg">
                                <div class="f-box c-page text-center typo-white">
                                    <div class="feature-icon margin-bottom-10">
                                        <i class="ti-headphone-alt"></i>
                                    </div>
                                    <div class="feature-content">
                                        <div class="feature-title">
                                            <h5 class="mb-2">Phone Number</h5>
                                        </div>
                                        <a href="tel:(+55)654-545-5418">+254797189400</a>
                                        <br>
                                        {{-- <a href="tel:(+55)654-545-1235">(+55) 654 - 545 - 1235</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-lg-4">
                            <div class="div-bg-img b-radius-20" data-bg="images/contact/contact_bg3.jpg">
                                <div class="f-box c-page text-center typo-white">
                                    <div class="feature-icon margin-bottom-10">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="feature-content">
                                        <div class="feature-title">
                                            <h5 class="mb-2">Email Address</h5>
                                        </div>
                                        <a href="mailto:prophetjeffter@gmail.com">prophetjeffter@gmail.com</a>
                                        <br>
                                        {{-- <a href="mailto:info@zegen.com">info@zegen.com</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                </div>
                <!-- Container -->
            </section>
            <!-- Contact Section End -->
            <!-- Contact Section -->
            <section class="contact-form-section form-with-img">
                <div class="container">
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-8 pe-0">
                            <!-- Contact Form -->
                            <div class="contact-form-4 bg-white">
                                <!-- Form -->
                                <div class="contact-form-wrap">
                                    <!-- form inputs -->
                                    <form id="contact-form" class="contact-form"
                                        action="{{ route('contact.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input id="name" class="form-control" name="name"
                                                        placeholder="Name" type="text" required />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input id="email" class="form-control" name="email"
                                                        placeholder="Email" type="email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input id="phone" class="form-control" name="phone"
                                                        placeholder="Phone" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input id="subject" class="form-control" name="subject"
                                                        placeholder="Subject" type="text" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea id="message" class="form-control" rows="5" name="message" placeholder="Your Message" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button type="submit" id="contact-submit"
                                                    class="btn btn-default mt-0 theme-btn">
                                                    Send Now
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- Loader/Spinner -->
                                    <div id="loading-spinner" class="loading-spinner" style="display: none;"></div>

                                    <div id="response-message"
                                        style="display: none; text-align: center; margin-top: 10px;"></div>

                                    <style>
                                        /* Loader Spinner Styles */
                                        .loading-spinner {
                                            width: 50px;
                                            /* Size of the spinner */
                                            height: 50px;
                                            border: 8px solid rgba(255, 0, 0, 0.3);
                                            /* Light red border */
                                            border-top-color: red;
                                            /* Red top border */
                                            border-radius: 50%;
                                            animation: spin 0.8s linear infinite;
                                            /* Animation */
                                            margin: 20px auto;
                                            /* Center the spinner */
                                        }

                                        @keyframes spin {
                                            0% {
                                                transform: rotate(0deg);
                                            }

                                            100% {
                                                transform: rotate(360deg);
                                            }
                                        }
                                    </style>

                                    <script>
                                        document.getElementById('contact-form').addEventListener('submit', function(e) {
                                            e.preventDefault(); // Prevent default form submission
                                            const formData = new FormData(this);
                                            const responseMessageDiv = document.getElementById('response-message');
                                            const loadingSpinner = document.getElementById('loading-spinner');

                                            responseMessageDiv.style.display = 'none'; // Hide previous messages
                                            loadingSpinner.style.display = 'block'; // Show the loader

                                            fetch("{{ route('contact.store') }}", {
                                                    method: "POST",
                                                    headers: {
                                                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                                    },
                                                    body: formData
                                                })
                                                .then(response => response.json())
                                                .then(data => {
                                                    loadingSpinner.style.display = 'none'; // Hide the loader
                                                    if (data.errors) {
                                                        // If there are validation errors
                                                        responseMessageDiv.style.color = 'red';
                                                        responseMessageDiv.innerHTML = '<ul>' + Object.values(data.errors).map(error =>
                                                            `<li>${error.join(', ')}</li>`).join('') + '</ul>';
                                                    } else {
                                                        // Success message
                                                        responseMessageDiv.style.color = 'green';
                                                        responseMessageDiv.innerHTML = data.message;
                                                        document.getElementById('contact-form').reset(); // Reset the form
                                                    }
                                                    responseMessageDiv.style.display = 'block'; // Show the response message
                                                })
                                                .catch(error => {
                                                    loadingSpinner.style.display = 'none'; // Hide the loader
                                                    responseMessageDiv.style.color = 'red';
                                                    responseMessageDiv.innerHTML = 'There was an error sending your message.';
                                                    responseMessageDiv.style.display = 'block';
                                                });
                                        });
                                    </script>

                                    {{-- Display success message if it exists --}}
                                    @if (session('success'))
                                        <div style="color: green; text-align: center; margin-top: 10px;">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    {{-- Display validation errors if they exist --}}
                                    @if ($errors->any())
                                        <div style="color: red; text-align: center; margin-top: 10px;">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif



                                    <div class="captcha-parent">
                                        <div class="g-recaptcha"
                                            data-sitekey="6LcuIvEcAAAAAFnQUTIoRRn6Gvc54vbWAf0GSEdP"
                                            data-callback="verifyRecaptchaCallback"></div>
                                    </div>
                                    <!-- form inputs end -->
                                    {{-- <p id="contact-status-msg" class="hide"></p> --}}
                                </div>
                                <!-- Form End-->
                            </div>
                            <!-- contact-form-1 -->
                        </div>
                        <!-- .col -->
                        <div class="col-lg-4 pad-none">
                            <div class="contact-img">
                                <img class="img-fluid" src="images/contact/contact_bg4.jpg" width="752"
                                    height="888" alt="Contact Map">
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                </div>
            </section>
            <!-- Contact Form Section End -->
            <!-- Contact Map -->
            <section class="contact-map pad-top-none">
                <div class="container">
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">
                            <!-- Screen Reader Text -->
                            <h2 class="screen-reader-text">Location of Spirit Light Ministries</h2>
                            <!-- Container Fluid -->
                            <div class="container-fluid pad-none">
                                <!-- Map -->
                                <div class="map mt-0">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510564.65107988653!2d36.5177334104462!3d-1.3031873859975642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1sen!2ske!4v1730460579289!5m2!1sen!2ske"
                                        width="100%" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                                <!-- Map -->
                            </div>
                            <!-- Container Fluid -->
                        </div>
                        <!-- col -->
                    </div>
                </div>
            </section>

            <!-- Contact Map End -->
        </div>
    </div>
    </div>
    <!-- .page-wrapper-inner -->
    </div>
    <!--page-wrapper-->

    <!-- Footer -->
    @include('footer')
    <!-- Footer -->
    <!-- Color Switcher -->
    <div id="theme-panel" class="close-theme-panel">
        <!--Panel Button -->
        <a class="panel-button"><i class="fa  fa-life-ring"></i></a>
        <div class="segment">
            <h4 class="condensed semibold uppercase no-margin no-padding">Color Switcher</h4>
        </div>
        <!-- Colors -->
        <div class="segment">
            <a title="blue" class="switcher blue-bg"></a>
            <a title="asphalt" class="switcher asphalt-bg"></a>
            <a title="green" class="switcher green-bg"></a>
            <a title="orange" class="switcher orange-bg"></a>
            <a title="purple" class="switcher purple-bg"></a>
            <a title="red" class="switcher red-bg"></a>
            <a title="s-green" class="switcher s-green-bg"></a>
            <a title="s-blue" class="switcher s-blue-bg"></a>
            <a title="gray" class="switcher gray-bg"></a>
            <a title="p-green" class="switcher p-green-bg"></a>
        </div>
    </div><!-- End Color Switcher -->

    <!-- jQuery Lib -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper Js Support for Bootstrap -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Easing Js -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Paroller Js -->
    <script src="js/jquery.paroller.min.js"></script>
    <!-- Validator Js -->
    <script src="js/validator.min.js"></script>
    <!-- Appear Js -->
    <script src="js/jquery.appear.min.js"></script>
    <!-- Appear Js -->
    <script src="js/smartresize.min.js"></script>
    <!-- Theme Custom Js -->
    <script src="js/custom.js"></script>
    <!-- Google Map Js -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtkY02zM_XV3XtSzJbNwJdiA2iuNmP_bI"></script>
    <!-- Google Recaptcha Js-->
    <script src='../../../www.google.com/recaptcha/api.js'></script>
    <!-- Google Recaptcha Callback-->
    <script>
        (function($) {
            "use strict";
            window.verifyRecaptchaCallback = function(response) {
                $("#hidden-grecaptcha").val(response);
                $(document).find("#hidden-grecaptcha").trigger('input');
            };
            window.expiredRecaptchaCallback = function() {
                $(document).find("#hidden-grecaptcha").val("").trigger('input')
            }
        })(jQuery);
    </script>
    <script src="js/color-panel.js"></script>
</body>
<!-- Body End -->

</html>
