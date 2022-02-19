<footer class="main-footer-two">
    <div class="widgets-section" style="    padding: 20px 0px 22px;">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Column-->
                <div class="column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget about-widget">
                        <div class="logo">
                            <a href="./" ><img src="{{asset('storage/app/public')}}/{{setting('site.logo')}}" style="width: 135px"></a>
                        </div>
                        <div class="address">
                            <h5>Mobile No</h5>
                            <div class="text"><a href="tel:{{setting('site.mobile_no')}}" class="txt">{{setting('site.mobile_no')}}</a></div>
                        </div>
                        <div class="address">
                            <h5>Email-address</h5>
                            <div class="text"><a href="mailto:{{setting('site.email_addr')}}" class="txt">{{setting('site.email_addr')}}</a></div>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class="column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <div class="widget-content">
                            <ul class="links">
                                <li><a href="{{url('./about')}}">About Us</a></li>
                                <li><a href="{{url('./contact')}}">Contact Us</a></li>
                                <li><a href="{{url('./election-management')}}">Services</a></li>
                                <li><a href="{{url('./list-legislative-assembly-member')}}">MLAs</a></li>
                                <li><a href="{{url('./list-parliament-member')}}">MPs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class="column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget twitter-widget">
                        <div class="widget-content">
                            <div class="feeds-carousel owl-theme owl-carousel owl-loaded owl-drag">
                                <!--Feed-->
                                <!--Feed-->
                                <!--Feed-->
                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-524px, 0px, 0px); transition: all 0.5s ease 0s; width: 1834px;"><div class="owl-item cloned" style="width: 232px; margin-right: 30px;"><div class="feed">
                                    <div class="text"><a href="#">@ netatop</a> Perfect Netatop.100% professional organisation and moderate concept on <a href="#">#election</a>.</div>
                                    <div class="info">
                                        <span class="icon fab fa-twitter"></span>
                                        <span class="name">Amit Sharma</span>
                                        <span class="designation">@member</span>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 232px; margin-right: 30px;"><div class="feed">
                                    <div class="text"><a href="#">@ netatop</a> Super election campaign management. Keep up the good work for <a href="#">#political</a> party..</div>
                                    <div class="info">
                                        <span class="icon fab fa-twitter"></span>
                                        <span class="name">Sumit Shah</span>
                                        <span class="designation">@member</span>
                                    </div>
                                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span class="icon flaticon-arrows-1"></span></button><button type="button" role="presentation" class="owl-next"><span class="icon flaticon-right-arrow"></span></button></div><div class="owl-dots disabled"></div></div>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class="column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget newsletter-widget">
                        <div class="widget-content">
                            <div class="newsletter-form">
                                <div class="instruction">Subscribe us to get latest news and events details.</div>
                                <form method="GET" action="{{url('/contact/create')}}">
                                    <div class="form-group clearfix">
                                        <input type="email" name="email" value="" placeholder="mailid@example.com" required="">
                                        <button type="submit" class="theme-btn"><span class="arrow flaticon-right-2"></span> Subscribe Us</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner clearfix">
                <ul class="social-links clearfix">
                    <li><span class="social-title">Connect with:</span></li>
                    <li><a href="{{setting('site.fb_link', '#')}}"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="{{setting('site.twitter_link', '#')}}"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="{{setting('site.linkedin_link', '#')}}"><span class="fab fa-linkedin-in"></span></a></li>
                    <li>
                </ul>
                <div class="copyright">Copyrights <a href="#">© {{date('Y')}} {{setting('site.title')}}.</a> All rights reserved.</div>
                <ul class="footer-links clearfix">
                    <li><a href="./privacy-policy">Private policy</a></li>
                    <li><a href="#">Terms of use</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>