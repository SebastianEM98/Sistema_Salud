@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <div class="row center">
            {{-- Nombre --}}
            <div class="col mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input readonly class="form-control" type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
            </div>
        </div>

        <div class="row center">
            {{-- Apellidos --}}
            <div class="col mb-3">
                <label for="last_name" class="form-label">Apellidos</label>
                <input readonly class="form-control" type="text" name="last_name" id="last_name" value="{{ old('last_name', $user->last_name) }}">
            </div>
        </div>

        <div class="row center">
            {{-- Tipo de documento --}}
            <div class="col mb-3">
                <label for="document_type" class="form-label">Tipo de Documento</label>
                <input readonly class="form-control" type="text" name="document_type" id="document_type" value="{{ old('document_type', $user->document_type) }}">
            </div>
        </div>

        <div class="row center">
            {{-- Documento --}}
            <div class="col mb-3">
                <label for="document" class="form-label">Documento</label>
                <input readonly class="form-control" type="text" name="document" id="document" value="{{ old('document', $user->document) }}">
            </div>
        </div>

        <div class="row center">
            {{-- Tipo de Sangre--}}
            <div class="col mb-3">
                <label for="blood_type" class="form-label">Tipo de Sangre</label>
                <input readonly class="form-control" type="text" name="blood_type" id="blood_type" value="{{ old('blood_type', $user->blood_type) }}">
            </div>
        </div>

        <div class="row center">
            {{-- Latitud --}}
            <div class="col mb-3">
                <label for="latitude" class="form-label">Latitud</label>
                <input readonly class="form-control" type="text" name="latitude" id="latitude" value="{{ old('latitude', $user->latitude) }}">
            </div>
        
            {{-- Longitud --}}
            <div class="col mb-3">
                <label for="longitude" class="form-label">Longitud</label>
                <input readonly class="form-control" type="text" name="longitude" id="longitude" value="{{ old('longitude', $user->longitude) }}">
            </div>
        </div>

        <div class="row center">
            {{-- E-Mail --}}
            <div class="col mb-3">
                <label for="email" class="form-label">E-Mail</label>
                <input readonly class="form-control" type="text" name="email" id="email" value="{{ old('email', $user->email) }}">
            </div>
        </div>

        <div class="row center">
            {{-- Rol --}}
            <div class="col mb-3">
                <label for="rol_id">Rol</label>
                <input readonly class="form-control" type="text" name="rol_id" id="rol_id" value="{{ old('rol_id', $user->roles->r_name) }}">
            </div>
        </div>
    </div>

    <div class="mb-3">
        <div class="form-group">
            <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Salir</a>
        </div>
    </div>
@endsection