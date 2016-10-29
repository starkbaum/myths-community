@extends('layouts.app')

@section('content')

    <h1>{{ $user->name }}'s Einstellungen</h1>

    <img src="/uploads/avatars/{{ $user->avatar }}" alt="" class="img-circle"/>
    <form action="/avatar" method="POST" enctype="multipart/form-data">
        <label for="avatar">Avatar</label>
        <input type="file" name="avatar">
        {{ csrf_field() }}
        <input type="submit" class="btn btn-sm btn-primary">
    </form>

@endsection