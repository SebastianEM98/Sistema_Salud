@csrf
@include('dashboard.partials.validation-error')
<div class="form-group">
    <div class="row center">
        {{-- Nombre --}}
        <div class="col mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Apellidos --}}
        <div class="col mb-3">
            <label for="last_name" class="form-label">Apellidos</label>
            <input class="form-control" type="text" name="last_name" id="last_name" value="{{ old('last_name', $user->last_name) }}">
        </div>
    </div>
 
    <div class="row center">
        <label class="col-md-7 col-form-label text-md-right">Direccion Georreferenciada de Residencia</label>
    </div>

    <div class="row center">
        {{-- Latitud --}}
        <div class="col mb-3">
            <label for="latitude" class="form-label">Latitud</label>
            <input class="form-control" type="text" name="latitude" id="latitude" value="{{ old('latitude', $user->latitude) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Longitud --}}
        <div class="col mb-3">
            <label for="longitude" class="form-label">Longitud</label>
            <input class="form-control" type="text" name="longitude" id="longitude" value="{{ old('longitude', $user->longitude) }}">
        </div>
    </div>

    <div class="row center">
        <div class="col mb-3">
            <label for="email" class="form-label">E-Mail</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row center">
        {{-- Rol --}}
        <div class="col mb-3">
            <label for="rol_id">Rol</label>
            
            <select class="custom-select" name="rol_id" id ="rol_id" aria-label="Default select example">
                <option selected disabled>Selecciona una opción</option>
                @foreach ($roles as $name =>$id)
                    <option {{ $user->rol_id == $id ? 'selected="selected"':'' }}value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>
    </div>

</div>

<div class="mb-3">
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm">Guardar</button>
        <a class="btn btn-info btn-sm" href="{{ route('user.index') }}">Regresar</a>
    </div>
</div>