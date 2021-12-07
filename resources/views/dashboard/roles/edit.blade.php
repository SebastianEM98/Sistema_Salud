@extends('dashboard.master')
@section('content')
<form action="{{ route('rol.update', $rol->id) }}" method="post">
    @method('PUT')
    @include('dashboard.roles._form')
</form>
@endsection