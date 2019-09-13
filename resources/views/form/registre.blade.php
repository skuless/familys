@extends('layouts.app')

@section('link')

        {{-- Style --}}
        <link rel="stylesheet" href="{{ asset('css/form/style.css') }}">

@endsection

@section('content')

    <a href="{{ route('home') }}"><img src="{{ asset('images/family.png') }}" alt="Logo Family's"></a>

    <form action="{{ route('formulaire.validateRegistre') }}" method="POST">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-success">
                        <div class="card-header-form text-center title-card">Nouveau Contact</div>
    
                        <div class="card-body-form">
                            <form method="POST" action="">
                                @csrf

                                <div class="form-group row">
                                    <label for="lastname" class="col-md-4 col-form-label text-md-right">Nom</label>
    
                                    <div class="col-md-6">
                                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" autocomplete="lastname" autofocus>
    
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
                                        <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" autocomplete="firstname" autofocus>
    
                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">Numéro de téléphone</label>
    
                                    <div class="col-md-6">
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus>
    
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="work" class="col-md-4 col-form-label text-md-right">Métier</label>
    
                                    <div class="col-md-6">
                                        <input id="work" type="text" class="form-control @error('work') is-invalid @enderror" name="work" value="{{ old('work') }}" autocomplete="work" autofocus>
    
                                        @error('work')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="gang" class="col-md-4 col-form-label text-md-right">Gang</label>
    
                                    <div class="col-md-6">
                                        <input id="gang" type="text" class="form-control @error('gang') is-invalid @enderror" name="gang" value="{{ old('gang') }}" autocomplete="gang" autofocus>
    
                                        @error('gang')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="immatriculation" class="col-md-4 col-form-label text-md-right">Immatriculation</label>
    
                                    <div class="col-md-6">
                                        <input id="immatriculation" type="text" class="form-control @error('immatriculation') is-invalid @enderror" name="immatriculation" value="{{ old('immatriculation') }}" autocomplete="immatriculation" autofocus>
    
                                        @error('immatriculation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="vehicle" class="col-md-4 col-form-label text-md-right">Véhicules</label>
    
                                    <div class="col-md-6">
                                        <input id="vehicle" type="text" class="form-control @error('vehicle') is-invalid @enderror" name="vehicle" value="{{ old('vehicle') }}" autocomplete="vehicle" autofocus>
    
                                        @error('vehicle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="sign" class="col-md-4 col-form-label text-md-right">Signe distinct</label>
    
                                    <div class="col-md-6">
                                        <input id="sign" type="text" class="form-control @error('sign') is-invalid @enderror" name="sign" value="{{ old('sign') }}" autocomplete="sign" autofocus>
    
                                        @error('sign')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="info" class="col-md-4 col-form-label text-md-right">Info complémentaire</label>
    
                                    <div class="col-md-6">
                                        <input id="info" type="text" class="form-control @error('info') is-invalid @enderror" name="info" value="{{ old('info') }}" autocomplete="info" autofocus>
    
                                        @error('info')
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