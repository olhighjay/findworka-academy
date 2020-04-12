<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--   LARAVEL -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
        <!-- laravel bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

                <!-- TEMPLATES -->
            <!-- Styles -->
        <!-- carousel bootstrap -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!-- Tutor Dashboard -->
    <link href="{{ asset('css/tutdash.css') }}" rel="stylesheet">

        <!-- Scripts -->

    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    {{-- <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/etrain/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/etrain/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/etrain/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/etrain/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/etrain/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/etrain/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/etrain/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/etrain/style.css"> --}}
    <style>
        /* h1,h2,h3{
            color:#0B0A49 !important; */
        }
        body,p {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
            font-size:medium;
        }
    </style>

         
</head>
     
</head>
<body>
    <div id="app">
        @include('inc.web.navbar')
        @include('inc.message')
        @yield('header')
        
        @yield('content')
        
        <br>
        <br>
        
        @include('inc.web.footer') 
        
    </div>


    <script src="{{ asset('js/tutdash.js') }}" defer></script>
    <!-- Carousel script -->
<!------ Include the above in your HEAD tag ---------->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</body>
</html>
