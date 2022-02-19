@extends('layouts.app')
@section('header')
    <title>Documentary Service - {{setting('site.title')}}</title>
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="keyword" content="{{setting('site.keyword')}}">
@endsection
@section('content')
<section class="page-banner">
    <div class="image-layer" style="    background-image: url(),linear-gradient( 100deg,#4fab55 0%,#1e5b58 100%)!important;"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Documentary Service</h1>
            </div>
        </div>
    </div>
</section>
<section class="welcome-section-two alternate">
    <div class="lower-row">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-6 mt-4">
                    <div><img style="width: 150px" src="https://cdn.shortpixel.ai/client/to_avif,q_glossy,ret_img/https://www.chunavparchar.com/wp-content/uploads/2019/01/videography.png"></div>
                    <h3>Local Issue Videography</h3>
                    <ul>
                        <li>Create Local Issues Video in Area.</li>
                        <li>Making Short Video in all Rallies and meetings.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection