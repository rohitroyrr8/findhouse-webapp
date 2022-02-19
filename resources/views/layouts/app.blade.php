<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    @include('includes.header')
    @yield('header')
</head>
<body class="maxw1600 m0a">
<div class="wrapper">
	<div class="preloader"></div>
    @include('includes.navbar')
	@yield('content')
    @include('includes.footer')
<a class="scrollToHome text-thm3" href="#"><i class="flaticon-arrows"></i></a>
</div>
@include('includes.script')
</body>

</html>