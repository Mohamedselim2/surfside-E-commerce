@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!DOCTYPE html>
<html class="no-js" lang="en">
    <title>@yield('title')</title>
    <head>
        <meta charset="utf-8">
        <title>Surfside Media</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="">
        <meta property="og:type" content="">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('import/assets/imgs/theme/favicon.ico') }}">
        <link rel="stylesheet" href="{{ asset('import/assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('import/assets/css/custom.css') }}">
    </head>
    <body>
        {{View::make('layouts/header')}}
        {{View::make('layouts/center_section')}}
        @yield('content')
        {{View::make('layouts/footer')}}
        <!-- Vendor JS-->
        <script src="{{ asset('import/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('import/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('import/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
        <script src="{{ asset('import/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/slick.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/jquery.syotimer.min.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/wow.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/jquery-ui.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/magnific-popup.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/select2.min.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/waypoints.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/counterup.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/images-loaded.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/isotope.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/scrollup.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/jquery.vticker-min.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/jquery.theia.sticky.js') }}"></script>
        <script src="{{ asset('import/assets/js/plugins/jquery.elevatezoom.js') }}"></script>
        <!-- Template  JS -->
        <script src="{{ asset('import/assets/js/main.js?v=3.3') }}"></script>
        <script src="{{ asset('import/assets/js/shop.js?v=3.3') }}"></script>
    </body>

</html>
<?php
