@extends('layouts.app')
@section('header')
    <title>Website & Mobile App Developement - {{setting('site.title')}}</title>
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="keyword" content="{{setting('site.keyword')}}">
@endsection
@section('content')
<section class="page-banner">
    <div class="image-layer" style="    background-image: url(),linear-gradient( 100deg,#4fab55 0%,#1e5b58 100%)!important;"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Website & Mobile App Developement</h1>
            </div>
        </div>
    </div>
</section>
<section class="welcome-section-two alternate">
    <div class="lower-row">
        <div class="auto-container">
            <div class="row">
                <p>The internet has become an extension of how businesses and politics operate. Having a great political website and mobile 
                app can help you maintain and increase awareness among your potential voters. Political websites are a form of political marketing
                that helps to share information and allows people to connect with you.</p>
                <p>Here are a few reasons having a website is a must for politicians:</p>
                <ul style="padding-left: 20px;">
                    <li>1. <b>Reaching More People:</b> Online campaigns help you reach anyone with internet access. The digital world gives the political parties an opportunity to connect with a wider range of audience and convey their message in an effective and affordable way.</li>
                    <li>2. <b>Keeps the Community Updated:</b> One of the major benefits of a political website is to keep the public updated about the day-to-day activities, events and announcements.</li>
                    <li>3. <b>Increases Voting Participation:</b> With a great political website and mobile application you can see the increase in the voter participation. Online campaigns are great for encouraging the population to vote and create awareness about the importance of democracy in a country.</li>
                    <li>4. <b>Allows people to connect with you:</b> It gives the voters a platform to connect with the political representative of their area and update them about their concerns.</li>
                    <li>5. <b>Find volunteers for funds:</b> With a political website you can find volunteers for funding that can help in running a great political campaign.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection