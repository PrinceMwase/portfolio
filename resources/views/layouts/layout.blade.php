<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link rel="stylesheet" href="{{asset('main/css/main.css')}}">
    <noscript><link rel="stylesheet" href="{{asset('main/css/noscript.css')}}" /></noscript>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{config('app.name', 'Larav')}} </title>
</head>
<body class="is-preload">
    <div id="wrapper">

        @yield('header')

        

        <div id="main">
            		<!-- Intro -->
        {{-- <article id="intro">
            <h2 class="major">Intro</h2>
            <span class="image main"><img src="images/pic01.jpg" alt="" /></span>
            <p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. By the way, check out my <a href="#work">awesome work</a>.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula.</p>
        </article> --}}
            @yield('content')
        </div>

        {{-- footer --}}
        <footer id="footer">
            <p class="copyright">&copy; UIHEXED. </p>
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