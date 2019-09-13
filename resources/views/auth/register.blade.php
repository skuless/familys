@extends('layouts.app')

@section('link')

    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('css/register/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table/style.css') }}">

@endsection

@if(Auth::check() === true)
    @if (Auth::user()->role === "Super Admin" || Auth::user()->role === "Oggi" || Auth::user()->role === "Gansta")
        @section('content')
            <header>
                <a href="{{ route('home') }}"><img src="{{ asset('images/family.png') }}" alt="Logo Family's"></a>
            </header>
            <main>   
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                            
                                <div class="form-admin">
                                    <label for="name">Nom/Pseudo</label>
                            
                                    <div>
                                        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            
                                <div class="form-admin">
                                    <label for="email">Email</label>
                            
                                    <div>
                                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            
                                <div class="form-admin">
                                    <label for="password">Mots de passe <small>Minimum 6 caractère</small></label>
                            
                                    <div>
                                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                    
                            
                                <div class="form-admin">
                                    <label for="password-confirm">Confirmation mots de passe</label>
                            
                                    <div>
                                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-select">
                                        <label for="role">Rôle</label>

                                        <select id="role" name="role">
                                            <option value="Oggi">Oggi</option>
                                            <option value="Gansta">Gansta</option>
                                            <option value="Dealer">Dealer</option>
                                            <option value="Petit">Petit</option>
                                        </select>
                                </div>
                            
                                <div class="form-group row mb-0">
                                    <div class="btn-admin">
                                        <button type="submit" class="btn btn-familys">
                                            Enregistrer
                                        </button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </main>
        @endsection

    @else
        
        <h1 class="alert alert-danger">Vous n'êtes pas autorisé ici</h1>

    @endif
    
@else

    <h1 class="alert alert-danger">Vous n'êtes pas autorisé ici</h1>

@endif


