@extends('layouts.app')

@section('link')

    <link rel="stylesheet" href="{{ asset('css/table/style.css') }}">
    <script src="https://kit.fontawesome.com/c8e43d811e.js" defer></script>

@endsection

@section('content')
    <table class="table table-hover">
        <thead>
            <th>Auteur</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Métier</th>
            <th>Gang</th>
            <th>Immatriculation</th>
            <th>Véhicules</th>
            <th>Signe distinct</th>
            <th>Info complémentaire</th>
            <th>date de création</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($registres as $registre)
                <tr>
                    <td>{{ $registre->author }}</td>
                    <td>{{ $registre->lastname }}</td>
                    <td>{{ $registre->firstname }}</td>
                    <td>{{ $registre->phone }}</td>
                    <td>{{ $registre->work }}</td>
                    <td>{{ $registre->gang }}</td>
                    <td>{{ $registre->immatriculation }}</td>
                    <td>{{ $registre->vehicle }}</td>
                    <td>{{ $registre->sign }}</td>
                    <td>{{ $registre->info }}</td>
                    <td>{{ $registre->created_at->format('d-m-Y H:i:s') }}</td>
                    <td class="text-right">
                        @if(Auth::user()->role === "Super Admin" || Auth::user()->role === "Oggi" || Auth::user()->role === "Gansta")
                            <button class="m-1" id="deleteRegistre" value="{{ $registre->id }}">
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