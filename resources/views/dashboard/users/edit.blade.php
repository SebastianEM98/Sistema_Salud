@extends('dashboard.master')
@section('content')
<form action="{{ route('user.update', $user->id) }}" method="post">
    @method('PUT')
    @include('dashboard.users._form')
</form>
@endsection