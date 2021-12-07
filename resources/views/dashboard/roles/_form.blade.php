@csrf
@include('dashboard.partials.validation-error')
<div class="form-group">
    <div class="row center">
        {{-- Rol --}}
        <div class="col mb-3">
            <label for="r_name" class="form-label">Rol</label>
            <input class="form-control" type="text" name="r_name" id="r_name" value="{{ old('r_name', $rol->r_name) }}">
        </div>
    </div>
</div>

<div class="mb-3">
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm">Guardar</button>
        <a class="btn btn-info btn-sm" href="{{ route('rol.index') }}">Regresar</a>
    </div>
</div>