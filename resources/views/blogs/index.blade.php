@extends('layouts.app')
@section('header')
    <title>News - {{setting('site.title')}}</title>
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="keyword" content="{{setting('site.keyword')}}">
    <style>
        .page-link, .page-link:hover {
            color: #4fab55;
        }
        .page-item.active .page-link {
            background-color: #4fab55;
            border-color: #4fab55;
        }
    </style>
@endsection
@section('content')
<div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="content-inner">
                            <div class="blog-posts">
                                <div class="row clearfix">
                                    @if($posts->count() > 0)
                                    @foreach($posts as $post)
                                        <!--News Block-->
                                        <div class="news-block-five col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{asset('storage/app/public')}}/{{$post->image}}" alt="" style="height: 233px"></figure>
                                                    <div class="hover-box">
                                                        <div class="more-link"><a href="./news/{{$post->slug}}">Read More</a></div>
                                                    </div>
                                                </div>
                                                <div class="lower-box">
                                                    <div class="upper-info">
                                                        <h4><a href="./news/{{$post->slug}}">{{substr($post->title,0, 50)}}...</a></h4>
                                                    </div>
                                                    <div class="meta-info clearfix">
                                                        <div class="author-info clearfix">
                                                            <div class="author-icon"><span class="flaticon-user-3"></span></div>
                                                            <div class="author-title">By NetaTop Team</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @else
                                    <h3>Nothing Found...</h3>
                                    @endif
                                </div>
                            </div>
                            <!--Pagination-->
                            <div class="pagination-box text-center">
                                {{$posts->links()}}
                                
                            </div>
                        </div>
                    </div>
                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar">
                            <div class="bg-layer">
                                <div class="image-layer" style="background-image:url({{asset('images/background/sidebar-bg-image.jpg')}});"></div>
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
                                        <li><a href="{{url('./news/category/politics')}}">Politics</a></li>
                                        <li><a href="{{url('./news/category/educational')}}">Educational</a></li>
                                    </ul>
                                </div>
                            </div>
                           
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