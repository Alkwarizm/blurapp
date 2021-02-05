<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title', 'BlurApp') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/datepicker/jquery.datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
</head>
<body>
    <div id="app">
        <main class="main flex-column">
            <nav class="navbar navbar-expand-md navbar-light ">
                <div class="container">
                    <a class="navbar-brand" href="http://blurrapp.teamalfy.online">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" width="100">
                    </a>
                </div>
            </nav>
            @yield('content')

        <footer class="footer py-4 mt-5 w-100">
          <div class="container">
            <ul class=" d-flex float-right">
                <li class=" font-weight-bolder">
                    <a href="">Privacy</a>
                </li>
                <li class="ml-5 font-weight-bolder">
                    <a href="">Terms and Condition</a>
                </li>
            </ul>
          </div>
        </footer>        
        </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/datepicker/jquery.datetimepicker.full.min.js') }}" type="text/javascript"></script>
    
    <script src="{{ asset('plugins/select2/select2.min.js') }}" type="text/javascript"></script>
</body>
</html>
