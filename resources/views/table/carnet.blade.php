@extends('layouts.app')

@section('link')

    <link rel="stylesheet" href="{{ asset('css/table/style.css') }}">
    <script src="https://kit.fontawesome.com/c8e43d811e.js" defer></script>

@endsection

@section('content')
    <table class="table table-hover">
        <thead>
            <th>N°</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Blaze</th>
            <th>Téléphone</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->num }}</td>
                    <td>{{ $contact->lastname }}</td>
                    <td>{{ $contact->firstname }}</td>
                    <td>{{ $contact->blaze }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td class="text-right">
                        @if(Auth::user()->role === "Super Admin" || Auth::user()->role === "Oggi" || Auth::user()->role === "Gansta")
                            <button id="deleteContact" value="{{ $contact->id }}">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p><a href="{{ route('home') }}">Retour</a></p>
    

@endsection