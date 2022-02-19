
<!DOCTYPE html>
<html lang="zxx">
<head>
	@include('includes.header')
    @yield('header')
</head>

<body class="th-15 homepage-4">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        @include('includes.navbar')
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        @yield('content')
        @include('includes.footer')
        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
		@include('includes.script')
    </div>
</body>
</html>

