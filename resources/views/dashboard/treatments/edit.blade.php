@extends('dashboard.master')
@section('content')
<form action="{{ route('treatment.update', $treatment->id) }}" method="post">
    @method('PUT')
    @include('dashboard.treatments._form')
</form>
@endsection