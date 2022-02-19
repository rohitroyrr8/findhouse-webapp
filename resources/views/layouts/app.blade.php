</html>
<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.header')
    
    @yield('header')
</head>
<body>
    <div class="page-wrapper">
        @include('includes.navbar')
        @yield('content')

        @include('includes.footer')
    </div>

    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon flaticon-up-arrow-angle"></span></div>
    @include('includes.script')
</body>
</html>