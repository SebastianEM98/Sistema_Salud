@csrf
@include('dashboard.partials.validation-error')
<div class="form-group">
    <div class="row center">
        {{-- Tratamiento --}}
        <div class="col mb-3">
            <label for="name" class="form-label">Tratamiento</label>
            <input class="form-control" type="text" name="t_name" id="t_name" value="{{ old('t_name', $treatment->t_name) }}">
        </div>
    </div>

    <div class="row center">
        {{-- Descripcion Tratamiento --}}
        <div class="col mb-3">
            <label for="description" class="form-label">Descripción</label>
            {{-- <input class="form-control" type="text" name="description" id="description" value="{{ old('description', $treatment->description) }}"> --}}
            <textarea class="form-control" name="description"
                id="description" cols="30" rows="5">
               {{ old('description', $treatment->description) }}
            </textarea>
        </div>
    </div>

    <div class="row center">
        {{-- Paciente --}}
        <div class="col mb-3">
            <label for="t_name" class="form-label">Paciente</label>
            
            <select class="custom-select" name="user_id" id ="user_id" aria-label="Default select example">
                <option selected disabled>Selecciona una opción</option>
                @foreach ($users as $user =>$id)
                    <option {{ $treatment->user_id == $id ? 'selected="selected"':'' }}value="{{ $id }}">{{ $user }} </option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="mb-3">
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm">Aceptar</button>
        <a class="btn btn-info btn-sm" href="{{ route('treatment.index') }}">Regresar</a>
    </div>
</div>