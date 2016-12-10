@extends('layouts.app')

@section('breadcrumb')
    <div class="row">
        <nav>
            <div class="nav-wrapper blue-grey darken-2">
                <div class="container">
                    <div class="col s12">
                        <a href="#!" class="breadcrumb">Forum</a>
                        <a href="#!" class="breadcrumb">Mitglieder</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
@endsection

@section('content')

    <ul class="collection ">
        @foreach($users as $user)
        <li class="collection-item avatar blue-grey darken-3">
            <img src="/uploads/avatars/{{ $user->avatar }}" alt="" class="circle"/>
            <span class="title">
                <a href="{{ url('/user', $user->id) }}">{{ $user->name }}</a>
            </span>
            @foreach($user->roles as $role)
                {{ $role->name }}
            @endforeach
        </li>
        @endforeach
    </ul>

@endsection