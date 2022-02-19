@extends('layouts.app')
@section('header')
    <title>About us - {{setting('site.title')}}</title>
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="keyword" content="{{setting('site.keyword')}}">
@endsection
@section('content')
<section class="page-banner">
    <div class="image-layer" style="background-image:url(https://static.theprint.in/wp-content/uploads/2019/05/2019-696x392.jpg);"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!--<h1>About Us</h1>-->
            </div>
        </div>
    </div>
</section>
<section class="welcome-section-two alternate">
    <div class="lower-row">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="text-col col-xl-5 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title with-separator">
                            <h2>Our Goal</h2>
                            <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>
                        </div>
                        <div class="text">Our goal at Netatop is to help our clients navigate and create change. The company designs and develops a campaign post an extensive studies and surveys of the constituency at ground level. Depending on the client’s requirement we can produce all kinds of print, video and digital communications. Our services include political election research, live broadcasting, website and mobile application development, social media marketing and grassroot messaging, vote bank analysis through surveys and feedback.</div>
                        <div class="info">
                            <strong style="font-style: italic">- NetaTop Team</strong>
                            <!--<span class="designation">mayor, since 21st Oct,2019</span>-->
                        </div>
                    </div>
                </div>
                <div class="image-col col-xl-7 col-lg-6 col-md-12 col-sm-12">
                    <div class="images">
                        <div class="row clearfix">
                            <div class="image col-md-4 col-sm-12">
                                <img src="https://www.surjeetthakur.com/wp-content/uploads/2016/12/Government-of-India-elections-1024x768.jpg" alt="" style="
    height: 159px;
">
                            </div>
                            <div class="image col-md-8 col-sm-12">
                                <img src="https://economictimes.indiatimes.com/thumb/msid-69417953,width-1200,height-900,resizemode-4,imgsize-382308/vote.jpg?from=mdr" alt="" style="
    height: 159px;
">
                            </div>
                            <div class="image col-md-8 col-sm-12">
                                <img src="https://images.carnegieendowment.org/images/article_images/GettyImages-1190595978.jpg" alt="" style="height: 199px;">
                            </div>
                            <div class="image col-md-4 col-sm-12">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_8s4wB7JqM-WcxGx5JKIC93HPQYfxtASiOQ&amp;usqp=CAU" style="
    height: 199px;
">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="content-row">
        <div class="auto-container">
            <div class="sec-title with-separator centered">
                <h2>Meet Our Team</h2>
                <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>
            </div>
            <div class="row">
                @if($teams->count() > 0)
                @foreach($teams as $team)
                <div class="col-md-3">
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image-box">
                                @if ($team->images)
                                    <figure class="image"><img src="./storage/app/public/{{$team->images}}" alt="" style="height: 300px"></figure>
                                @else
                                    <figure class="image"><img src="./storage/app/public/users/default-user-profile-image-png-6-Transparent-Images.png" style="height: 300px"></figure>
                                @endif
                            </div>
                            <div class="lower-box">
                                <h4><a href="#">{{$team->name}}</a></h4>
                                <div class="designation">{{$team->designation}}</div>
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