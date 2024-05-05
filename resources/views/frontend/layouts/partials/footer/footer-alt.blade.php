<!-- Footer Section Start -->
<footer id="footer" class="footer footer-2">
    <div class="footer-area">
        <img src="{{asset('assets/images/footer-4-bg.svg')}}" alt="footer-bg" class="footer-bg">
        <div class="container">
            <div class="row footer-middle">
                <div class="col-xl-5 col-lg-3 col-md-4 col-sm-8 mb-4 mb-lg-0">
                    <div class="footer-content">
                        <div class="footer-logo">
                            <img src="assets/images/icons/logo-footer.svg" alt="logo">
                        </div>
                        <p>Pet care and veterinary services are crucial for maintaining the health and well-being of
                            our beloved animal companions</p>
                        <ul class="footer-social">
                            <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/?original_referer="><i
                                        class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 mb-4 mb-lg-0">
                    <div class="footer-menu">
                        <h2 class="menu-category">Quick Links</h2>
                        <ul class="footer-menu-list">
                            <li><a href="team.html">Our Team</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="blog.html">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 mb-4 mb-sm-0">
                    <div class="footer-menu">
                        <h2 class="menu-category">Legal</h2>
                        <ul class="footer-menu-list">
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="{{route('frontend.contact')}}">Contact Us</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 mb-4 mb-sm-0">
                    <div class="footer-menu">
                        <h2 class="menu-category">Legal</h2>
                        <ul class="contact-info-collection">
                            <li class="mb-4">
                                <p><span><i class="fa-solid fa-phone"></i></span></p> +1 234 567 890
                            </li>
                            <li class="mb-4">
                                <p><span><i class="fa-regular fa-envelope"></i></span></p> purrwell@gmail.com
                            </li>
                            <li>
                                <p><span><i class="fa-solid fa-location-dot"></i></span></p> 2092 Owen LaneFort
                                Myers, FL 33901
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-devider"></div>
        <div class="container">
            <div class="footer-bottom">
                <p class="footer-copyright">&copy; @php echo date('Y') @endphp PET D.O.M.A. {{__('All Rights Reserved')}}</p>
                <div class="footer-bottom-link">
                    <a href="#">Privay & Policy</a>
                    <p>|</p>
                    <a href="#">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->
