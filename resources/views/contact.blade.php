@extends('layouts.app')
@section('header')
    <title>Contact us - {{setting('site.title')}}</title>
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="keyword" content="{{setting('site.keyword')}}">
@endsection
@section('content')
<section class="page-banner">
    <div class="image-layer" style="background-image:url(https://4.bp.blogspot.com/-eREZkbam5a0/VuKTkhXidTI/AAAAAAAAJnc/CPZ_DetepkweZKOx9edrJLDdVlviM58xw/s640/taj-Mahal.jpg);"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</section>
<section class="contact-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="left-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="images clearfix">
                        <figure class="image"><img src="https://img.veenaworld.com/wp-content/uploads/2020/08/Take-This-Quiz-How-Many-Indian-Monuments-Can-You-Recognize-1-800x533.jpg?imwidth=1080" alt=""></figure>
                        <figure class="image"><img src="https://4.bp.blogspot.com/-eREZkbam5a0/VuKTkhXidTI/AAAAAAAAJnc/CPZ_DetepkweZKOx9edrJLDdVlviM58xw/s640/taj-Mahal.jpg" alt=""></figure>
                    </div>
                    <div class="contact-info-box">
                        <div class="inner">
                            <ul class="info">
                                <li class="clearfix">
                                    <h4>Quick contact</h4>
                                    <div class="content">
                                        <span class="icon flaticon-telephone-2"></span>
                                        <span>Call on</span><br>
                                        <a class="txt" href="tel:{{setting('site.mobile_no')}}">{{setting('site.mobile_no')}}</a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <h4>Email address</h4>
                                    <div class="content">
                                        <span class="icon flaticon-postcard"></span>
                                        <span>Mail to</span><br>
                                        <a href="mailto:{{setting('site.email_addr')}}" class="txt">{{setting('site.email_addr')}}</a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <h4>Visit our office</h4>
                                    <div class="content">
                                        <span class="icon flaticon-map"></span>
                                        <span class="txt">{{setting('site.address')}}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title with-separator">
                        <h2>We’re Here to Help You</h2>
                        <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>
                        <div class="lower-text">Shoot us a message if you have any question, we’re here to help!.</div>
                        
                    </div>
                    <div class="default-form form-box">
                        <form method="GET" action="{{url('/contact/create')}}" id="contact-form" novalidate="novalidate">
                            <div class="form-group">
                                <div class="field-inner">
                                    <input type="text" name="name" placeholder="Your name" required="" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="field-inner">
                                    <input type="email" name="email" placeholder="Email" required="" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="field-inner">
                                    <input type="tel" name="mobile" placeholder="Mobile no" required="" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="field-inner">
                                    <textarea name="message" placeholder="Message..." required=""></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Send Message</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection