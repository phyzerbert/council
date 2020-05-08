<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MYGreenway</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        window.user = "{{Auth::id()}}";
    </script>
    @yield('style')
</head>
<body>
    <div id="app">
        @include('greenway.layouts.header')

        @yield('pricing-header')

        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>    
    @yield('script')

</body>
</html>
