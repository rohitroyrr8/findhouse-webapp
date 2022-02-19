@extends('layouts.app')
@section('header')
    <title>Live Broadcasting - {{setting('site.title')}}</title>
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="keyword" content="{{setting('site.keyword')}}">
@endsection
@section('content')
<section class="page-banner">
    <div class="image-layer" style="    background-image: url(),linear-gradient( 100deg,#4fab55 0%,#1e5b58 100%)!important;"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Live Broadcasting</h1>
            </div>
        </div>
    </div>
</section>
<section class="welcome-section-two alternate">
    <div class="lower-row">
        <div class="auto-container">
            <div class="row">
                <p>In the past decades, the only way to get live political news was by watching television. Today, however, live streaming politics (along with social networks, like Twitter and Facebook) are changing the game.</p>

<p>Politicians and political parties are going the digital route and following these trends. They are embracing online video to reach a younger generation of voters. Live videos are a cost-effective way to meet open meeting requirements and increase civic engagement.</p>
                <h3>Twitter Live</h3>
                <p>Today, politics is playing out online. Between Twitter, live streaming, and 24/7 news coverage, the internet is the place we go to stay informed about the political happenings.</p>
                <br>
                <h3>Facebook/YouTube Live</h3>
                <p>Today Live Stream Political Rallies, Speeches, and Meetings is an ideal solution for politics. Platforms like YouTube and Facebook allow anyone with a smartphone and a data connection to live stream. Our digital team creates live videos and shares with the potential voters.</p>
            </div>
        </div>
    </div>
</section>
@endsection