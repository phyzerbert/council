<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{config('app.name')}}</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{asset('backend/vendors/ti-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('backend/vendors/css/vendor.bundle.base.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/main/style.css')}}">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}" />
        @yield('stylel')
    </head>
    <body class="sidebar-dark">
        <div class="container-scroller">
            @include('backend.layouts.header')
            <div class="container-fluid page-body-wrapper">

                @include('backend.layouts.sidebar')

                <div class="main-panel">

                    @yield('content')

                    {{-- @include('backend.layouts.footer') --}}

                </div>
            </div>
        </div>
        <!-- plugins:js -->
        <script src="{{asset('backend/vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{asset('backend/vendors/chart.js/Chart.min.js')}}"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{asset('backend/js/off-canvas.js')}}"></script>
        <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('backend/js/template.js')}}"></script>
        <script src="{{asset('backend/js/settings.js')}}"></script>
        <script src="{{asset('backend/js/todolist.js')}}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{asset('backend/js/dashboard.js')}}"></script>
        <!-- End custom js for this page-->
        @yield('script')
    </body>
</html>