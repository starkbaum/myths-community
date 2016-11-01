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
            <img src="/uploads/avatars/{{ $user->avatar }}" alt="" class="circle"/>
        </div>


    </div>
</div>

<form action="/avatar" method="POST" enctype="multipart/form-data">
<div id="upload-avatar" class="modal bottom-sheet blue-grey darken-2 grey-text">
    <div class="modal-content container">
        <h4>Neues Profilbild hochladen</h4>
        <div class="file-field input-field">
            <div class="btn">
                <span>File</span>
                <input type="file" name="avatar">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
        {{ csrf_field() }}
    </div>
    <div class="modal-footer blue-grey darken-3">
        <button class="waves-effect waves-teal btn-flat" type="submit" name="action">Hochladen</button>
    </div>
</div>
</form>


@endsection

@section('fab')
    <div class="fixed-action-btn click-to-toggle">
        <a class="btn-floating btn-large cyan darken-1">
            <i class="material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a class="btn-floating red" href="#upload-avatar" data-target="avatar-form-modal"><i class="material-icons">person_pin</i></a></li>
        </ul>
    </div>
@endsection