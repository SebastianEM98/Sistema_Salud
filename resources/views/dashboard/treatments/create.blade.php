@extends('dashboard.master')
@section('content')
<form action="{{ route('treatment.store') }}" method="post">
    @include('dashboard.treatments._form')
</form>
@endsection