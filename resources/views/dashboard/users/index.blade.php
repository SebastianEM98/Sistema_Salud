@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header">{{ __('Usuarios') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('user.create') }}" class="btn btn-warning btn-sm mb-3">Agregar Usuario</a>
                    

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Tipo de Documento</th>
                                <th scope="col">Documento</th>
                                <th scope="col">Tipo de Sangre</th>
                                <th scope="col">E-Mail</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Acciones</th>
                
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->document_type }}</td>
                                    <td>{{ $user->document }}</td>
                                    <td>{{ $user->blood_type }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->roles->r_name }}</td>
                                    <td>
                                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-info btn-sm">Ver</a>
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info btn-sm">Editar</a>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"
                                            data-id="{{ $user->id }}">Eliminar
                                        </button>                                
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="pagination justify-content-end">
                        {!! $users->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{ $users->links() }}

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
                <label class="text-muted">¿Seguro que deseas eliminar el usuario seleccionado?</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="eliminarUser" action="{{ route('user.destroy', 0) }}"
                    data-action="{{ route('user.destroy', 0) }}" method="POST">
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
                        action =$('#eliminarUser').attr('data-action').slice(0, -1)
                        action += id
                        $('#eliminarUser').attr('action', action)
                        var modal = $(this)
                        modal.find('.modal-title').text('Vas a eliminar el usuario '+id)
                    });
    };
</script>
