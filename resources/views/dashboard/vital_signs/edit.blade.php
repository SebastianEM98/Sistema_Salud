@extends('dashboard.master')
@section('content')
<form action="{{ route('vitalSign.update', $vitalSign->id) }}" method="post">
    @method('PUT')
    @include('dashboard.vital_signs._form')
</form>
@endsection