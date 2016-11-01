@extends('layouts.app')

@section('breadcrumb')
    <div class="row">
        <nav>
            <div class="nav-wrapper blue-grey darken-2">
                <div class="container">
                    <div class="col s12">
                        <a href="#!" class="breadcrumb">Forum</a>
                        <a href="#!" class="breadcrumb">Einstellungen</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col s12">

        <div class="settings-avatar center-align">
            <img src="/uploads/avatars/{{ $user->avatar }}" alt="" class="circle center-align"/>
            <form action="/avatar" method="POST" enctype="multipart/form-data">
                <label for="avatar">Avatar</label>
                <input type="file" name="avatar">
                {{ csrf_field() }}
                <input type="submit" class="">
            </form>
        </div>


    </div>
</div>

@endsection