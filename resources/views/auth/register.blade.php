@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="document_type" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Documento') }}</label>

                            <div class="col-md-6">
                                <select name="document_type" class="form-control" id="document_type" aria-label="Default select example">
                                    <option selected disabled>Selecciona una opción</option>
                                    <option value="cedula_ciudadana">Cédula de Ciudadanía</option>
                                    <option value="cedula_extranjera">Cédula Extrenjera</option>
                                    <option value="tarjeta_pasaporte">Tarjeta de Pasaporte</option>
                                    <option value="registro_civil">Registro Civil</option>
                                    <option value="tarjeta_identidad">Tarjeta de Identidad</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="document" class="col-md-4 col-form-label text-md-right">{{ __('Documento') }}</label>

                            <div class="col-md-6">
                                <input id="document" type="text" class="form-control @error('document') is-invalid @enderror" name="document" value="{{ old('document') }}" required autocomplete="document" autofocus>

                                @error('document')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="blood_type" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Sangre') }}</label>

                            <div class="col-md-6">
                                <select name="blood_type" class="form-control" id="blood_type" aria-label="Default select example">
                                    <option selected disabled>Selecciona una opción</option>
                                    <option value="A+">A positivo (A+)</option>
                                    <option value="A-">A negativo (A-)</option>
                                    <option value="B+">B positivo (B+)</option>
                                    <option value="B-">B negativo (B-)</option>
                                    <option value="AB+">AB positivo (AB+)</option>
                                    <option value="AB-">AB negativo (AB-)</option>
                                    <option value="O+">O positivo (O+)</option>
                                    <option value="O-">O negativo (O-)</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-7 col-form-label text-md-right">Direccion Georreferenciada de Residencia</label>
                        </div>
                        
                        <div class="form-group row">
                            <label for="latitude" class="col-md-4 col-form-label text-md-right">{{ __('Latitud') }}</label>

                            <div class="col-md-6">
                                <input id="latitude" type="text" class="form-control @error('latitude') is-invalid @enderror" name="latitude" value="{{ old('latitude') }}" required autocomplete="latitude" placeholder="Ej: 5.067338" autofocus>

                                @error('latitude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="longitude" class="col-md-4 col-form-label text-md-right">{{ __('Longitud') }}</label>

                            <div class="col-md-6">
                                <input id="longitude" type="text" class="form-control @error('longitude') is-invalid @enderror" name="longitude" value="{{ old('longitude') }}" required autocomplete="longitude" placeholder="Ej: -75.524157" autofocus>

                                @error('longitude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="rol_id" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

                            <div class="col-md-6">
                                <select class="custom-select" name="rol_id" id ="rol_id" aria-label="Default select example">
                                    <option selected disabled>Selecciona una opción</option>
                                    @foreach ($roles as $name =>$id)
                                        <option {{ $user->rol_id == $id ? 'selected="selected"':'' }}value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
