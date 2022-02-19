@extends('layouts.app')
@section('header')
    <title>List of Member of the Legislative Assembly - {{setting('site.title')}}</title>
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="keyword" content="{{setting('site.keyword')}}">
@endsection
@section('content')
<section class="page-banner">
    <div class="image-layer" style="background-image:url(https://images.financialexpress.com/2020/12/cats-39.jpg);"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>List of Member of the Legislative Assembly</h1>
            </div>
        </div>
    </div>
</section>
<section class="contact-section">
    <div class="auto-container">
        <div class=" clearfix">
            <!--<embed src="images/documents/list_mp.pdf" width="100%" height="100%" type="application/pdf"    />-->
            <iframe src="https://en.wikipedia.org/wiki/Member_of_the_Legislative_Assembly_(India)" style="width:100%; height:100%;" frameborder="0"></iframe>
        </div>
    </div>
</section>
@endsection