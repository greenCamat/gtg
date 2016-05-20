<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       
        <link rel="stylesheet" href="{{ asset('assets/stylesheets/css-admin/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/stylesheets/css-admin/mq.css') }}">


        <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-1.9.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    </head>

    <body>
        <div class="page-container"> 
            @include('admin-header')
                @yield('content')
            @yield('scripts')
        </div>          
    </body>
</html>
    