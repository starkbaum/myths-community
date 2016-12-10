@extends('layouts.app')

@section('breadcrumb')
<div class="row">
    <nav>
        <div class="nav-wrapper blue-grey darken-2">
            <div class="container">
                <div class="col s12">
                    <a href="#!" class="breadcrumb">Administration</a>
                    <a href="#!" class="breadcrumb">Rollen</a>
                </div>
            </div>
        </div>
    </nav>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col s2">
        @include('admin.partials.navigation')
    </div>
    <div class="col s10 card blue-grey darken-3">
        <ul class="collapsible popout" data-collapsible="accordion">
            @foreach($roles as $role)
            <li>
                <div class="collapsible-header"><i class="material-icons">filter_drama</i>{{ $role->display_name }} <small>{{ $role->name }}</small></div>
                <div class="collapsible-body">
                    <div class="row">
                        <ul class="collection with-header col s5">
                            <li class="collection-header"><h6>Mitglieder</h6></li>
                            @foreach($role->user as $user)
                                <li class="collection-item avatar">
                                    <img src="/uploads/avatars/{{ $user->avatar }}" alt="" class="circle">
                                    <span class="title">{{ $user->name }}</span>
                                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                                </li>
                            @endforeach
                        </ul>
                        <ul class="collection with-header col s7">
                            <li class="collection-header"><h6>Rechte</h6></li>

                            <li class="collection-item">
                                <div>{{ $user->name }}<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div>
                            </li>

                        </ul>
                    </div>

                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection

@section('fab')
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light cyan darken-1" href="#add-role"><i class="material-icons">library_add</i></a>
    </div>
@endsection

@section('modals')
    <form action="{{ url('admin/roles') }}" method="POST">
        <div id="add-role" class="modal bottom-sheet blue-grey darken-2 grey-text">
            <div class="modal-content container">
                <h4>Neue Rolle hinzufügen</h4>
                {{ csrf_field() }}
                <div class="input-field col s6">
                    <input id="role-name" name="name" type="text" class="validate">
                    <label for="role-name">Rolle</label>
                </div>
            </div>
            <div class="modal-footer blue-grey darken-3">
                <button class="waves-effect waves-teal btn-flat" type="submit" name="action">Rolle hinzufügen</button>
            </div>
        </div>
    </form>
@endsection