<footer id="footer" class="footer footer-1 footer-bg-img" data-bg="images/bg/footer-bg.jpg">
    <!-- Footer Widgets Columns -->
    <div class="footer-widgets">
        <div class="footer-middle-wrap footer-overlay-dark">
            <div class="color-overlay"></div>
            <div class="container">
                <div class="row">
                    <!-- About Section -->
                    <div class="col-lg-3 widget text-widget">
                        <div class="widget-title">
                            <h3 class="title typo-white">About Us</h3>
                        </div>
                        <div class="widget-text margin-bottom-30">
                            <p>
                                About Spirit Light Ministries Online Church
                                A global community led by Prophet Caleb Wekesa and Pastor Jephter Wekeda, sharing hope
                                and faith through online services.
                            </p>
                        </div>
                        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
                        <div style="display: flex; align-items: center; gap: 15px; padding: 10px;">
                            <a href="https://youtube.com/@pj_wekesa?si=mMD9En8rW6L8tmEN"
                                style="text-decoration: none; color: #FF0000; transition: transform 0.3s ease;"
                                target="_blank" rel="noopener noreferrer"
                                onmouseover="this.style.transform='scale(1.2)'"
                                onmouseout="this.style.transform='scale(1)'">
                                <i class="ri-youtube-fill" style="font-size: 24px;"></i>
                            </a>

                            <a href="https://www.facebook.com/share/86VbkXLQeZ4docC1/"
                                style="text-decoration: none; color: #1877F2; transition: transform 0.3s ease;"
                                target="_blank" rel="noopener noreferrer"
                                onmouseover="this.style.transform='scale(1.2)'"
                                onmouseout="this.style.transform='scale(1)'">
                                <i class="ri-facebook-fill" style="font-size: 24px;"></i>
                            </a>

                            <a href="https://www.tiktok.com/@jeffterwekesa?_t=8r0iZRFSOg9&_r=1"
                                style="text-decoration: none; color: #000000; transition: transform 0.3s ease;"
                                target="_blank" rel="noopener noreferrer"
                                onmouseover="this.style.transform='scale(1.2)'"
                                onmouseout="this.style.transform='scale(1)'">
                                <i class="ri-tiktok-fill" style="font-size: 24px;"></i>
                            </a>

                            <a href="https://imo.onelink.me/RAdY?af_dp=imo%3A%2F%2Fuser.voiceroom.join%2Fmy.0vwl2cirurms8aho%3Fentry_type%3Dshare&af_web_dp=https%3A%2F%2Fimo.im&from=copy_link"
                                style="text-decoration: none; color: #4CAF50; transition: transform 0.3s ease;"
                                target="_blank" rel="noopener noreferrer"
                                onmouseover="this.style.transform='scale(1.2)'"
                                onmouseout="this.style.transform='scale(1)'">
                                <i class="ri-global-line" style="font-size: 24px;"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Quick Links -->
                    <div class="col-lg-3 widget text-widget">
                        <div class="widget-title">
                            <h3 class="title typo-white">Quick Links</h3>
                        </div>
                        <div class="menu-quick-links">
                            <ul class="menu">
                                <li class="menu-item"><a href="{{ route('about-us') }}">About Us</a></li>
                                <li class="menu-item"><a href="{{ route('events') }}">Events</a></li>
                                <li class="menu-item"><a href="{{ route('donate-now') }}">Donate Now</a></li>
                                <li class="menu-item"><a href="{{ route('contact-us') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Newsletter Section -->
                    <div class="col-lg-3 widget contact-info-widget">
                        <div class="widget-title">
                            <h3 class="title typo-white">Newsletter</h3>
                        </div>
                        <p>
                            Stay Connected!
                            Sign up for our newsletter for updates, inspiration, and upcoming events. Join our
                            faith-filled community today!
                        </p>
                        <div class="mailchimp-widget-wrap">
                            <!-- Subscribe Form -->
                            <form id="subscribe-form-1" class="subscribe-form" action="{{ route('subscribe') }}"
                                method="POST">
                                @csrf
                                <div class="input-group add-on">
                                    <input type="text" class="form-control" name="mcemail" autocomplete="off"
                                        id="mcemail-1" placeholder="Email Address" />
                                    <div class="input-group-btn">
                                        <button class="btn btn-default subscribe-btn" type="submit">Sign Up</button>
                                    </div>
                                </div>
                                <div id="loader" class="loader" style="display: none;"></div>
                                <!-- Add the loader here -->
                                <p class="subscribe-status-msg hide"></p>
                            </form>

                            <style>
                                /* Loader styles */
                                .loader {
                                    border: 4px solid #f3f3f3;
                                    /* Light gray background */
                                    border-top: 4px solid red;
                                    /* Red color for the rotating part */
                                    border-radius: 50%;
                                    width: 24px;
                                    height: 24px;
                                    animation: spin 1s linear infinite;
                                    margin: 10px auto;
                                }

                                /* Animation */
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
                                document.getElementById('subscribe-form-1').addEventListener('submit', function(e) {
                                    e.preventDefault();

                                    const email = document.getElementById('mcemail-1').value;
                                    const statusMsg = document.querySelector('.subscribe-status-msg');
                                    const loader = document.getElementById('loader');

                                    statusMsg.classList.add('hide'); // Hide previous messages
                                    loader.style.display = 'block'; // Show the loader

                                    fetch("{{ route('subscribe') }}", {
                                            method: "POST",
                                            headers: {
                                                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                                                "Content-Type": "application/json"
                                            },
                                            body: JSON.stringify({
                                                mcemail: email
                                            })
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            statusMsg.classList.remove('hide');
                                            statusMsg.style.color = 'green';
                                            statusMsg.textContent = data.message;
                                        })
                                        .catch(error => {
                                            statusMsg.classList.remove('hide');
                                            statusMsg.style.color = 'red';
                                            statusMsg.textContent = 'There was an error. Please try again later.';
                                        })
                                        .finally(() => {
                                            loader.style.display = 'none'; // Hide the loader
                                        });
                                });
                            </script>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Copyright -->
    <div class="footer-copyright">
        <div class="footer-bottom-wrap pad-tb-20 typo-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="footer-bottom-items pull-left">
                            <li class="nav-item">
                                <div class="nav-item-inner">
                                    Copyrights ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    <a href="{{ route('welcome') }}">Spirit Light Ministries Online</a>. Developed by
                                    <a href="https://jrmhd.tech/" target="_blank">Jrmhd Technologies</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="footer-bottom-items footer-menu pull-right">
                            <li class="nav-item">
                                <a href="{{ route('contact-us') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
