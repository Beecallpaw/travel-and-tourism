<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Nepali Yatra" />
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css')}}" />
    @yield('styles')

</head>

<body>
    <div id="wrapper" class="home-page">
        @include('layouts.partials.topbar')
        @include('layouts.partials.navbar')
        @yield('content')
        
    </div>
        <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.fancybox.pack.js')}}"></script>
        <script src="{{ asset('js/jquery.fancybox-media.js')}}"></script>
        <script src="{{ asset('js/jquery.flexslider.js')}}"></script>
        <script src="{{ asset('js/animate.js')}}"></script>
        <script src="{{ asset('js/modernizr.custom.js')}}"></script>
        <script src="{{ asset('js/jquery.isotope.min.js')}}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('js/custom.js')}}"></script>
        <script src="{{ asset('js/toastr.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script>
            @if(Session::has('success'))
                toastr.success(" {{ Session::get('success') }}")
            @endif
            @if(Session::has('error'))
                toastr.error(" {{ Session::get('error') }}")
            @endif
            @if(Session::has('info'))
                toastr.info(" {{ Session::get('info') }}")
            @endif
        </script>
        @yield('scripts')
</body>

</html>