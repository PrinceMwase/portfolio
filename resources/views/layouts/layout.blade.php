<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link rel="stylesheet" href="{{asset('main/css/css/main.css')}}">
    <noscript><link rel="stylesheet" href="{{asset('main/css/noscript.css')}}" /></noscript>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{config('app.name', 'Larav')}} </title>
</head>
<body class="is-preload">
    <div id="wrapper">

        @yield('content')


        {{-- footer --}}
        <footer id="footer">
            <p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
        </footer>
    </div>

    {{-- background --}}
    <div id="bg"></div>

    <!-- Scripts -->
        <script src="{{asset('main/js/jquery.min.j')}}s"></script>
        <script src="{{asset('main/js/browser.min.js')}}"></script>
        <script src="{{asset('main/js/breakpoints.min.js')}}"></script>
        <script src="{{asset('main/js/util.js')}}"></script>
        <script src="{{asset('main/js/main.js')}}"></script>

</body>
</html>