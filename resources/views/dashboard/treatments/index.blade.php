@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tratamientos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('treatment.create') }}" class="btn btn-warning btn-sm mb-3">Agregar Tratamiento</a>
                    
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tratamiento</th>
                                <th scope="col">Paciente</th>
                                <th scope="col">Tipo de Documento</th>
                                <th scope="col">Documento</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($treatments as $treatment)
                                <tr>
                                    <th scope="row">{{ $treatment->id }}</th>
                                    <td>{{ $treatment->t_name }}</td>
                                    <td>{{ $treatment->usuarios->name }} {{ $treatment->usuarios->last_name }}</td>
                                    <td>{{ $treatment->usuarios->document_type }}</td>
                                    <td>{{ $treatment->usuarios->document }}</td>

                                    <td>
                                        <a href="{{ route('treatment.show', $treatment->id) }}" class="btn btn-info btn-sm">Ver</a>
                                        <a href="{{ route('treatment.edit', $treatment->id) }}" class="btn btn-info btn-sm">Editar</a>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"
                                            data-id="{{ $treatment->id }}">Eliminar
                                        </button>                                
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="pagination justify-content-end">
                        {!! $treatments->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{ $treatments->links() }}

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
                <label class="text-muted">¿Seguro que deseas eliminar el tratamiento seleccionado?</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="eliminarTreatment" action="{{ route('treatment.destroy', 0) }}"
                    data-action="{{ route('treatment.destroy', 0) }}" method="POST">
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
                        action =$('#eliminarTreatment').attr('data-action').slice(0, -1)
                        action += id
                        $('#eliminarTreatment').attr('action', action)
                        var modal = $(this)
                        modal.find('.modal-title').text('Vas a eliminar el tratamiento '+id)
                    });
    };
</script>
