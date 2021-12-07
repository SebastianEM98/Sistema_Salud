@extends('dashboard.master')
@section('content')

<div class="form-group">
    <div class="row center">
        {{-- Oximetria --}}
        <div class="col mb-3">
            <label for="oximetry" class="form-label">Oximetría</label>
            <input readonly class="form-control" type="text" name="oximetry" id="oximetry" value="{{ old('oximetry', $vitalSign->oximetry) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Frecuencia Respiratoria --}}
        <div class="col mb-3">
            <label for="b_frequency" class="form-label">Frecuencia Respiratoria</label>
            <input readonly class="form-control" type="text" name="b_frequency" id="b_frequency" value="{{ old('b_frequency', $vitalSign->b_frequency) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Frecuencia Cardiaca --}}
        <div class="col mb-3">
            <label for="h_rate" class="form-label">Frecuencia Cardíaca</label>
            <input readonly class="form-control" type="text" name="h_rate" id="h_rate" value="{{ old('h_rate', $vitalSign->h_rate) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Temperatura --}}
        <div class="col mb-3">
            <label for="temperature" class="form-label">Temperatura (°C)</label>
            <input readonly class="form-control" type="text" name="temperature" id="temperature" value="{{ old('temperature', $vitalSign->temperature) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Presion Arterial --}}
        <div class="col mb-3">
            <label for="b_pressure" class="form-label">Presión Arterial</label>
            <input readonly class="form-control" type="text" name="b_pressure" id="b_pressure" value="{{ old('b_pressure', $vitalSign->b_pressure) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Glicemias --}}
        <div class="col mb-3">
            <label for="glycemia" class="form-label">Presión Glicemias</label>
            <input readonly class="form-control" type="text" name="glycemia" id="glycemia" value="{{ old('glycemia', $vitalSign->glycemia) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Paciente Nombre --}}
        <div class="col  mb-3">
            <label for="user_id" class="form-label">Nombre del Paciente</label>
            <input readonly class="form-control" type="text" name="user_id" id="user_id" value="{{ old('user_id', $vitalSign->usuarios->name) }}">
        </div>

        {{-- Paciente Apellidos --}}
        <div class="col mb-3">
            <label for="user_id" class="form-label">Apellidos del Paciente</label>
            <input readonly class="form-control" type="text" name="user_id" id="user_id" value="{{ old('user_id', $vitalSign->usuarios->last_name) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Tipo Documento Paciente --}}
        <div class="col  mb-3">
            <label for="user_id" class="form-label">Tipo de Documento</label>
            <input readonly class="form-control" type="text" name="user_id" id="user_id" value="{{ old('user_id', $vitalSign->usuarios->document_type) }}">
        </div>

        {{-- Documento Paciente --}}
        <div class="col  mb-3">
            <label for="user_id" class="form-label">Documento</label>
            <input readonly class="form-control" type="text" name="user_id" id="user_id" value="{{ old('user_id', $vitalSign->usuarios->document) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Glicemias --}}
        <div class="col mb-3">
            <label for="blood_type" class="form-label">Tipo de Sangre</label>
            <input readonly class="form-control" type="text" name="blood_type" id="blood_type" value="{{ old('blood_type', $vitalSign->usuarios->blood_type) }}">
        </div>
    </div>

    <div class="mb-3">
        <div class="form-group">
            <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Salir</a>
        </div>
    </div>

</div>
@endsection