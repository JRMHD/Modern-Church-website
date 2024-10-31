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
                            <h3 class="title typo-white">About Zegen</h3>
                        </div>
                        <div class="widget-text margin-bottom-30">
                            <p>
                                Zegen Church WordPress Theme is professionally designed for
                                non-profit church, modern church, prayer group, Christian,
                                charity, non-profit organization. Grab it soon!
                            </p>
                        </div>
                        <div class="social-icons">
                            <a href="#" class="social-fb"><span class="ti-facebook"></span></a>
                            <a href="#" class="social-twitter"><span class="ti-twitter"></span></a>
                            <a href="#" class="social-instagram"><span class="ti-instagram"></span></a>
                            <a href="#" class="social-pinterest"><span class="ti-pinterest"></span></a>
                            <a href="#" class="social-youtube"><span class="ti-youtube"></span></a>
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
                                <li class="menu-item"><a href="{{ route('campaigns') }}">Campaigns</a></li>
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
                            Sign up for our weekly newsletter to stay updated on all news
                            and events at Zegen Church. Email updates on new product
                            announcements, gift ideas, special promotions, and more.
                        </p>
                        <div class="mailchimp-widget-wrap">
                            <!-- Subscribe Form -->
                            <form id="subscribe-form-1" class="subscribe-form"
                                action="https://zozothemes.com/html/zegen/inc/function.php">
                                <div class="input-group add-on">
                                    <input type="text" class="form-control" name="mcemail" autocomplete="off"
                                        id="mcemail-1" placeholder="Email Address" />
                                    <div class="input-group-btn">
                                        <button class="btn btn-default subscribe-btn" type="submit">Sign Up</button>
                                    </div>
                                </div>
                                <p class="subscribe-status-msg hide"></p>
                            </form>
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
                                    <a href="{{ route('welcome') }}">Zegen</a>. Developed by
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
