<!-- Stored in resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="{{ asset('assets/stylesheets/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/stylesheets/style2.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/stylesheets/modal.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/stylesheets/jquery.bxslider.css') }}">
      
        <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-1.9.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.bxslider.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/scripts/assets.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/MooTools-More-1.6.0-compressed.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/MooTools-Core-1.6.0.js') }}"></script>
        
    </head>
    <body>
        <div class="page-container">
            @include('layout.header')
                @yield('content')
            @yield('scripts')
         </div>
        @include('layout.footer')
    </body>
   
</html>