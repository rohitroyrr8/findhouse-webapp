@extends('layouts.app')
@section('header')
    <title>Image Gallery - {{setting('site.title')}}</title>
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="keyword" content="{{setting('site.keyword')}}">
@endsection
@section('content')
<section class="page-banner">
    <div class="image-layer" style="background-image:url(http://st.ourhtmldemo.com/new/City.Govt/images/background/banner-image-3.jpg);"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Image Gallery</h1>
            </div>
        </div>
    </div>
</section>
<section class="portfolio-section portfolio-masonry">
    <div class="auto-container">
        <!--Masonry Galery-->

        <div class="sortable-masonry filter-gallery">
            <div class="items-container row clearfix" style="position: relative;">
                @if($objects->count() > 0)
                @foreach($objects as $image)
                <!--Gallery Item-->

                <div class="gallery-block masonry-item all conference celebration tour col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="image-box">
                            <figure class="image">
                                <img src="./storage/app/public/{{$image->url}}" alt="" />
                            </figure>

                            <div class="zoom-btn">
                                <a class="lightbox-image zoom-link" href="./storage/app/public/{{$image->url}}" data-fancybox="gallery"><span class="icon flaticon-zoom-in"></span></a>
                            </div>

                            <div class="cap-box">
                                <h4>
                                    <a href="#"><span></span> {{$image->name}} <span></span></a>
                                </h4>
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
    </div>
</section>

<section class="ext-info-section" style="background-image: url('./images/background/pattern-2.png'); background-size: contain; background-color: #f1f1f1">
    <div class="content-row">
        <div class="auto-container">
            <div class="content">
                <h4>WE WOULD LOVE TO BE A PART OF YOUR CAMPAIGNS!</h4>
                <h2>Still have some questions?<h2>
                <div class="link-box">
                    <a href="./contact" class="theme-btn btn-style-one"><span class="btn-title">Contact Us</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection