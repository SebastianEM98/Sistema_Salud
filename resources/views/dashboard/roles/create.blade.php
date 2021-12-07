@extends('dashboard.master')
@section('content')
<form action="{{ route('rol.store') }}" method="post">
    @include('dashboard.roles._form')
</form>
@endsection