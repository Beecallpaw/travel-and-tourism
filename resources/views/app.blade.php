<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css')}}" />
    @yield('styles')
    <title>@yield('title')</title>
</head>

<body>

    @yield('content')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
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