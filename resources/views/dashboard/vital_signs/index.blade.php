@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Signos Vitales') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('vitalSign.create') }}" class="btn btn-warning btn-sm mb-3">Agregar</a>
                    
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Oximetría</th>
                                <th scope="col">Frecuencia Respiratoria</th>
                                <th scope="col">Frecuencia Cardíaca</th>
                                <th scope="col">Temperatura (°C)</th>
                                <th scope="col">Presión Arterial</th>
                                <th scope="col">Glicemias</th>
                                <th scope="col">Paciente</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($vitalSigns as $vitalSign)
                                <tr>
                                    <th scope="row">{{ $vitalSign->id }}</th>
                                    <td>{{ $vitalSign->oximetry }}</td>
                                    <td>{{ $vitalSign->b_frequency }}</td>
                                    <td>{{ $vitalSign->h_rate }}</td>
                                    <td>{{ $vitalSign->temperature }}</td>
                                    <td>{{ $vitalSign->b_pressure }}</td>
                                    <td>{{ $vitalSign->glycemia }}</td>
                                    <td>{{ $vitalSign->usuarios->name }} {{ $vitalSign->usuarios->last_name }}</td>

                                    <td>
                                        <a href="{{ route('vitalSign.show', $vitalSign->id) }}" class="btn btn-info btn-sm">Ver</a>
                                        <a href="{{ route('vitalSign.edit', $vitalSign->id) }}" class="btn btn-info btn-sm">Editar</a>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"
                                            data-id="{{ $vitalSign->id }}">Eliminar
                                        </button>                                
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="pagination justify-content-end">
                        {!! $vitalSigns->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{ $vitalSigns->links() }}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label class="text-muted">¿Seguro que deseas eliminar el signo vital seleccionado?</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="eliminarVitalSign" action="{{ route('vitalSign.destroy', 0) }}"
                    data-action="{{ route('vitalSign.destroy', 0) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
            $('#exampleModal').on('show.bs.modal', function(event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal
                        var id = button.data('id') // Extract info from data-* attributes
                        action =$('#eliminarVitalSign').attr('data-action').slice(0, -1)
                        action += id
                        $('#eliminarVitalSign').attr('action', action)
                        var modal = $(this)
                        modal.find('.modal-title').text('Vas a eliminar el tratamiento '+id)
                    });
    };
</script>
