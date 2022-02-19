@extends('layouts.app')
@section('header')
    <title>{{$post->title}} - {{setting('site.title')}}</title>
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="keyword" content="{{setting('site.keyword')}}">
@endsection
@section('content')
<section class="blog-banner">
            <div class="image-layer" style="background-image:url({{asset('storage/app/public')}}/{{$post->image}});"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <div class="meta-info clearfix">
                            <a href="#"><span class="fa fa-folder"></span>{{$post->category->name}}</a>
                        </div>
                        <h1>{{$post->title}}</h1>
                        <div class="author-info">
                            <h6>By NetaTop Team</h6>
                        </div>
                        <!--<div class="other-info clearfix">-->
                        <!--    <div class="date"><span>24.12.2019</span></div>-->
                        <!--    <div class="tags"><a href="#">Certificates, Drinks &amp; Food, Free Style</a></div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </section>
        <div class="sidebar-page-container">
<div class="auto-container">
    <div class="row clearfix">
        <!--Content Side-->
        <div class="content-side col-lg-8 col-md-12 col-sm-12">
            <div class="content-inner">
                <div class="single-post">
                    <div class="post-details">
                        {!!$post->body!!}    
                    </div>
                </div>
            </div>
        </div>
        <!--Sidebar Side-->
        <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
            <aside class="sidebar">
                <div class="bg-layer">
                    <div class="image-layer" style="background-image:url(images/background/sidebar-bg-image.jpg);"></div>
                </div>
                <div class="sidebar-widget search-box">
                    <div class="widget-inner">
                        <div class="sidebar-title">
                            <h4>Search</h4>
                        </div>
                        <form method="get" action="{{route('search_news')}}">
                            <div class="form-group">
                                <input type="search" name="query" value="" placeholder="Keyword..." required="">
                                <button type="submit"><span class="icon flaticon-magnifying-glass"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sidebar-widget cat-widget">
                    <div class="widget-content">
                        <div class="sidebar-title">
                            <h4>Categories</h4>
                        </div>
                        <ul class="cat-links clearfix">
                            <li><a href="{{url('blog/category/politics')}}">Politics</a></li>
                            <li><a href="{{url('blog/category/educational')}}">Educational</a></li>
                        </ul>
                    </div>
                </div>
                <!--Posts-->
                <div class="sidebar-widget contact-widget">
                    <div class="widget-content">
                        <div class="sidebar-title">
                            <h4>Subscribe Us</h4>
                        </div>
                        <div class="newsletter-box-two">
                            <div class="image-box">
                                <div class="image-layer" style="background-image: url(images/background/image-13.jpg);"></div>
                                <div class="text">Subscribe us to get latest news and events detail.</div>
                                <form method="post" action="contact.html">
                                    <div class="form-group clearfix">
                                        <input type="email" name="email" value="" placeholder="mailid@example.com" required="">
                                        <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Subscribe Us</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
</div>
@endsection