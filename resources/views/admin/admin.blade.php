@extends('layouts.app')

@section('link')

    <link rel="stylesheet" href="{{ asset('css/table/style.css') }}">
    <script src="https://kit.fontawesome.com/c8e43d811e.js" defer></script>

@endsection

@section('content')

@if (isset($error))
    <div class="alert alert-danger">
        {{ $error }}
    </div>
@endif

<table class="table table-hover">
        <thead>
            <th>Nom IG</th>
            <th>email</th>
            <th>role</th>
            <th>Date de création</th>
            <th></th>
        </thead>
        <tbody>
            
                @if(Auth::user()->role === 'Super Admin')
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->created_at->format('d-m-Y H:i:s') }}</td>
                            <td class="text-right">
                                @if($user->role !== 'Super Admin')
                                    <button id="deleteUser" value="{{ $user->id }}">
                                        <a href="#"><i class="far fa-trash-alt"></i></a>
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @elseif(Auth::user()->role === "Gansta" || Auth::user()->role === "Oggi")
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->created_at->format('d-m-Y H:i:s') }}</td>
                            <td class="text-right">
                                @if($user->role === 'Oggi' || $user->role === 'Gansta' || $user->role === 'Super Admin')

                                @else
                                    <button id="deleteUser" value="{{ $user->id }}">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @endif
        </tbody>
    </table>

    <section>
        <h1><a href="{{ route('register') }}">Inscription Nouveau Joueur</a></h1>
        
        <p><a href="{{ route('home') }}">Retour</a></p>
    
    </section>
    

@endsection
