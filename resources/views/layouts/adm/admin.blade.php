<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <div>
        @include('inc.adm.navbar')
        @include('inc.message')
        <div style="padding-top:30px; padding-bottom:30px">
            <div class="container">
                    <!-- SIDE MENU -->
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <div class="card">
                            @include('inc.adm.sidemenu')
                        </div>
                    </div>
                        <!-- CONTENT -->
                    <div class="col-md-9">
                        
                            @yield('content')
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>