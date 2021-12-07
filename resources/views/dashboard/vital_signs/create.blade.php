@extends('dashboard.master')
@section('content')
<form action="{{ route('vitalSign.store') }}" method="post">
    @include('dashboard.vital_signs._form')
</form>
@endsection