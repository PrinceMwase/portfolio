@extends('layouts.layout')

@section('header')
    
    {{-- header --}}
    <header id="header">
        <div class="logo">
            <img src="{{asset('main/images/profile.png')}}" alt="" style="
            width: 100%;
            height: 100%;
            border: solid 1px transparent;
            border-radius: 100%;
        ">
            {{-- <span class="icon fa-user"></span> --}}
        </div>
        <div class="content">
            <div class="inner">
                <h1>UI Hexed</h1>
                <h3>Prince Mwase</h3>
                <p>is a software and web developer with more than 6 years of experience <br>
                 An active member and co-founder of <a href="mailto:helix@tikwele.com">UI HEXED</a> </p>
                 
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#bio">Bio</a></li>
                <li><a href="#work">Work</a></li>
              
                @auth
                    <li><a href="#gallery">Gallery</a></li>
                      <li><a href="#post">Cave</a></li>
                @endauth
                
                <li><a href="#contact">contact</a></li>
                <li><a href="#about">about</a></li>
                
            </ul>
        </nav>
    </header>

@endsection