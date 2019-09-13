@extends('layouts.app')

@section('link')

    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('css/home/style.css') }}">

@endsection

@section('content')

    @if(Auth::user()->role === "Oggi" || Auth::user()->role === "Super Admin" || Auth::user()->role === "Gansta")
        <a class="administration" href="{{ route('admin') }}">Administration</a>
    @endif

    @if(auth()->check() === true)
        <a class="logout" href="{{ route('logout') }}">Déconnexion</a>
    @endif
    
    <a href="{{ route('home') }}"><img src="{{ asset('images/family.png') }}" alt="Logo Family's"></a>
    
    <ul>
        <li class="titleHome">Numéro des Family's</li>
        <ul class="list-link-home">
            <li class="linkHome"><a href="{{ route('contact') }}">Consulter</a></li>
            <li class="linkHome"><a href="{{ route('newContact') }}">Inscription</a></li>
        </ul>
        <li class="titleHome">Base de données</li>
        <ul class="list-link-home">
            <li class="linkHome"><a href="{{ route('registre') }}">Registre</a></li>
            <li class="linkHome"><a href="{{ route('newRegistre') }}">Ajouter au registre</a></li>
        </ul>
        <li class="titleHome"><a href="https://i0.wp.com/www.bragitoff.com/wp-content/uploads/2015/11/GTAV-HD-MAP-satellite.jpg" target="blank">Map</a></li>
    </ul>

@endsection
