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
        <table class="grey-text">
            <thead>
            <tr>
                <th data-field="id">Rolle</th>
                <th data-field="name">Permissions</th>
                <th data-field="price">Aktionen</th>
            </tr>
            </thead>

            <tbody>
                @foreach($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>xxxxxxx</td>
                    <td>Edit - Delete</td>
                </tr>
                @endforeach
            </tbody>
        </table>
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