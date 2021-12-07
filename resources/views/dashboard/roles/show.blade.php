@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <div class="row center">
            {{-- Rol --}}
            <div class="col  mb-3">
                <label for="r_name" class="form-label">Rol</label>
                <input readonly class="form-control" type="text" name="r_name" id="r_name" value="{{ old('r_name', $rol->r_name) }}">
            </div>
        </div>
    </div>

    <div class="mb-3">
        <div class="form-group">
            <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Salir</a>
        </div>
    </div>
@endsection