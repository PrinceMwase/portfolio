@extends('layouts.layout')

@section('header')
    
    {{-- header --}}
    <header id="header">
        <div class="logo">
            <span class="icon fa-user"></span>
        </div>
        <div class="content">
            <div class="inner">
                <h1>UI Hexed</h1>
                <h3>Prince Mwase</h3>
                <p>Prince Mwase is a software and web developer with more than 6 years of experience <br />
                 An active member and co-founder of <a href="mailto:helix@tikwele.com">UI HEXED</a> </p>
                 
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#bio">Intro</a></li>
                <li><a href="#work">Work</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                {{-- <li><a href="#elements">Elements</a></li> --}}
            </ul>
        </nav>
    </header>

@endsection