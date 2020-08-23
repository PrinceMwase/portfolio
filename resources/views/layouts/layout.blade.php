<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link rel="stylesheet" href="{{asset('main/css/main.css')}}">
    <style>
        .custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(1.5em + .75rem);
    padding: .375rem .75rem;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 .25rem .25rem 0;
}
.gooniepost:hover{
    box-shadow: 2px -3px 5px black;
}
.gooniepost{
    transition-duration: 200ms;
}
li.category:hover{
    background-color: #595b5e;
    cursor: pointer;
}
li.category.active{
    background-color: #595b5e;
    padding-left: 20px;
    transition-duration: 500ms;
}
    </style>
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