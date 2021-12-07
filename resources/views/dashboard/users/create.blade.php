@extends('dashboard.master')
@section('content')
<form action="{{ route('user.store') }}" method="post">
    @include('dashboard.users._form')
</form>
@endsection