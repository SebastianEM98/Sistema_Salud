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
        {{-- Tipo de documento --}}
        <div class="col mb-3">
            <label for="document_type" class="form-label">Tipo de Documento</label>
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

    <div class="row center">
        {{-- Documento --}}
        <div class="col mb-3">
            <label for="document" class="form-label">Documento</label>
            <input class="form-control" type="text" name="document" id="document" value="{{ old('document', $user->document) }}">
        </div>
    </div>
    
    <div class="row center">
        {{-- Tipo de Sangre --}}
        <div class="col-md-12">
            <label for="blood_type" class="form-label">Tipo de Sangre</label>
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
        {{-- E-Mail --}}
        <div class="col mb-3">
            <label for="email" class="form-label">E-Mail</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ old('email', $user->email) }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row center">
        {{-- Contraseña --}}
        <div class="col mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row center">
        {{-- Confirmar Contraseña --}}
        <div class="col mb-3">
            <label for="confirm-password" class="form-label">Contraseña</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

            @error('confirm-password')
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