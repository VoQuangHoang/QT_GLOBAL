<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('image/site-icon.png') }}" type="image/x-icon">
    <base href="{{ asset('') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/csstoo.css') }}">
    

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="uikit/css/uikit.min.css" />
    
    <title>@yield('title')</title>
</head>

<body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2" style="padding: 0;">
                    @include('users.menu')
                </div>

                <div class="col-md-10" style="padding: 0;">

                    <!-- Cắt code chính từng trang ở đoạn này -->
                    <!-- Content -->
                    @yield('content')
                    <!-- End Content -->
                    
                    <!-- Footer -->
                    
                    <!-- End Footer -->
                    @include('users.footer')
                </div>
    
            </div>
           
            <!--/row-->
        </div>
        <!--/container-->
    

    <!-- JS -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.slim.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js')}}"></script>
    <!-- UIkit JS -->
    <script type="text/javascript" src="{{ asset('uikit/js/uikit.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('uikit/js/uikit-icons.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    
</body>

</html>
