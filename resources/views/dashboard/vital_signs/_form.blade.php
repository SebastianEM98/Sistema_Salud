@csrf
@include('dashboard.partials.validation-error')
<div class="form-group">
    <div class="row center">
        {{-- Oximetria --}}
        <div class="col mb-3">
            <label for="oximetry" class="form-label">Oximetría</label>
            <input class="form-control" type="text" name="oximetry" id="oximetry" value="{{ old('oximetry', $vitalSign->oximetry) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Frecuencia Respiratoria --}}
        <div class="col mb-3">
            <label for="b_frequency" class="form-label">Frecuencia Respiratoria</label>
            <input class="form-control" type="text" name="b_frequency" id="b_frequency" value="{{ old('b_frequency', $vitalSign->b_frequency) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Frecuencia Cardiaca --}}
        <div class="col mb-3">
            <label for="h_rate" class="form-label">Frecuencia Cardíaca</label>
            <input class="form-control" type="text" name="h_rate" id="h_rate" value="{{ old('h_rate', $vitalSign->h_rate) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Temperatura --}}
        <div class="col mb-3">
            <label for="temperature" class="form-label">Temperatura (°C)</label>
            <input class="form-control" type="text" name="temperature" id="temperature" value="{{ old('temperature', $vitalSign->temperature) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Presion Arterial --}}
        <div class="col mb-3">
            <label for="b_pressure" class="form-label">Presión Arterial</label>
            <input class="form-control" type="text" name="b_pressure" id="b_pressure" value="{{ old('b_pressure', $vitalSign->b_pressure) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Glicemias --}}
        <div class="col mb-3">
            <label for="glycemia" class="form-label">Glicemias</label>
            <input class="form-control" type="text" name="glycemia" id="glycemia" value="{{ old('glycemia', $vitalSign->glycemia) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Paciente --}}
        <div class="col mb-3">
            <label for="user_id" class="form-label">Paciente</label>
            
            <select class="custom-select" name="user_id" id ="user_id" aria-label="Default select example">
                <option selected disabled>Selecciona una opción</option>
                @foreach ($users as $user =>$id)
                    <option {{ $vitalSign->user_id == $id ? 'selected="selected"':'' }}value="{{ $id }}">{{ $user }} </option>
                @endforeach
            </select>
        </div>
    </div>

</div>

<div class="mb-3">
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm">Guardar</button>
        <a class="btn btn-info btn-sm" href="{{ route('vitalSign.index') }}">Regresar</a>
    </div>
</div>