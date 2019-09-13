@extends('layouts.app')

@section('link')

        {{-- Style --}}
        <link rel="stylesheet" href="{{ asset('css/form/style.css') }}">

@endsection

@section('content')

    <a href="{{ route('home') }}"><img src="{{ asset('images/family.png') }}" alt="Logo Family's"></a>

    <form action="{{ route('formulaire.validateContact') }}" method="POST">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-success">
                        <div class="card-header-form text-center title-card">Nouveau Contact</div>
    
                        <div class="card-body-form">
                            <form method="POST" action="">
                                @csrf

                                <div class="form-group row">
                                        <label for="num" class="col-md-4 col-form-label text-md-right">N°</label>
        
                                        <div class="col-md-6">
                                            <input id="num" type="text" class="form-control @error('num') is-invalid @enderror" name="num" value="{{ old('num') }}" required autocomplete="num" autofocus>
        
                                            @error('num')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
    
                                <div class="form-group row">
                                    <label for="lastname" class="col-md-4 col-form-label text-md-right">Nom</label>
    
                                    <div class="col-md-6">
                                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
    
                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="firstname" class="col-md-4 col-form-label text-md-right">Prenom</label>
    
                                    <div class="col-md-6">
                                        <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
    
                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="blaze" class="col-md-4 col-form-label text-md-right">Blaze</label>
    
                                    <div class="col-md-6">
                                        <input id="blaze" type="text" class="form-control @error('blaze') is-invalid @enderror" name="blaze" value="{{ old('blaze') }}" autocomplete="blaze" autofocus>
    
                                        @error('blaze')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">Numéro de téléphone</label>
    
                                    <div class="col-md-6">
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
    
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-3">
                                        <button type="submit" class="btn btn-familys">
                                            Enregistrer
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection