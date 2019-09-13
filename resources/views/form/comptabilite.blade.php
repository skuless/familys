@extends('layouts.app')

@section('link')

        {{-- Style --}}
        <link rel="stylesheet" href="{{ asset('css/register/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/table/style.css') }}">

@endsection

@section('content')

    <a href="{{ route('home') }}"><img src="{{ asset('images/family.png') }}" alt="Logo Family's"></a>

    <form action="{{ route('formulaire.validateRegistre') }}" method="POST">

        <div class="container">
            <div class="col justify-content-center">
                <form method="POST" action="">
                    @csrf

                    <div class="row">
                        <div class="form-admin mr-5">
                            <label for="name">Stockez chez</label>
    
                            <div>
                                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('lastname') }}" autocomplete="lastname" autofocus>
    
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
    
                        <div class="form-admin">
                            <label for="dirtyMoney">Montant argent sale</label>
    
                            <div>
                                <input id="dirtyMoney" type="text" class="@error('dirtyMoney') is-invalid @enderror" name="dirtyMoney" value="{{ old('firstname') }}" autocomplete="firstname" autofocus>
    
                                @error('dirtyMoney')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
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
    </form>
@endsection