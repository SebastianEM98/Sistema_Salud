@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <div class="row center">
            {{-- Tratamiento --}}
            <div class="col  mb-3">
                <label for="t_name" class="form-label">Tratamiento</label>
                <input readonly class="form-control" type="text" name="t_name" id="t_name" value="{{ old('t_name', $treatment->t_name) }}">
            </div>
        </div>

        <div class="row center">
            {{-- Descripcion Tratamiento --}}
            <div class="col mb-3">
                <label for="description" class="form-label">Descripción</label>
                {{-- <input class="form-control" type="text" name="description" id="description" value="{{ old('description', $treatment->description) }}"> --}}
                <textarea readonly class="form-control" name="description"
                    id="description" cols="30" rows="4">
                   {{ old('description', $treatment->description) }}
                </textarea>
            </div>
        </div>

        <div class="row center">
            {{-- Paciente Nombre --}}
            <div class="col  mb-3">
                <label for="user_id" class="form-label">Nombre del Paciente</label>
                <input readonly class="form-control" type="text" name="user_id" id="user_id" value="{{ old('user_id', $treatment->usuarios->name) }}">
            </div>

            {{-- Paciente Apellidos --}}
            <div class="col mb-3">
                <label for="user_id" class="form-label">Apellidos del Paciente</label>
                <input readonly class="form-control" type="text" name="user_id" id="user_id" value="{{ old('user_id', $treatment->usuarios->last_name) }}">
            </div>
        </div>

        <div class="row center">
            {{-- Tipo Documento Paciente --}}
            <div class="col  mb-3">
                <label for="user_id" class="form-label">Tipo de Documento</label>
                <input readonly class="form-control" type="text" name="user_id" id="user_id" value="{{ old('user_id', $treatment->usuarios->document_type) }}">
            </div>

            {{-- Documento Paciente --}}
            <div class="col  mb-3">
                <label for="user_id" class="form-label">Documento</label>
                <input readonly class="form-control" type="text" name="user_id" id="user_id" value="{{ old('user_id', $treatment->usuarios->document) }}">
            </div>
        </div>
    </div>

    <div class="mb-3">
        <div class="form-group">
            <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Salir</a>
        </div>
    </div>
@endsection